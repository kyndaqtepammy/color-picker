var btnColorScheme = document.querySelector("#generate-color-scheme");
var chromaColor, userColor, colorList, steps, colorScheme, scaleList, colorBlocks=[];
colorScheme = document.querySelector('.color-scheme');
colorBlocks = document.querySelectorAll('.base-color');
colorheading  = document.querySelector('.color-heading');
steps= 9;
coloraNames = [];

colorBlocks.forEach( colorBlock => {
  const style = getComputedStyle(colorBlock);
  const backgroundColor = style.backgroundColor;

  colorBlock.addEventListener('click', (e) => {
    colorBlocks.forEach(el => el.classList.remove('active-colorblock'));
    colorBlock.classList.add('active-colorblock');
    colorheading.innerHTML = e.target.id+"s";
    colorheading.style.color = backgroundColor;

    colorList = [];
    colorScheme.innerHTML = '';
    chromaColor = chroma(backgroundColor);

    //create monochromatic color scheme
    for  ( var i=0; i<steps; i++ ) {
      colorList[i] = chromaColor.darken(i - Math.floor(steps/2));
    }

    //generate some elements
    for ( var j=0; j<colorList.length; j++) {
      var newItem = document.createElement('span');
      newItem.style.backgroundColor = colorList[j];
      newItem.classList.add("color-box")
      newItem.innerHTML = '<span class ="color-name">'+ colorList[j] +'</span>';
      colorScheme.append(newItem);
    }
  });
});


