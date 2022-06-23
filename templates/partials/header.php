<?php
    namespace Processwire;
?>
<!DOCTYPE html>
<html lang="cs-CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>
        Default web
    </title>

    <style>

/* AUTO GRID
Related Every Layout: https://every-layout.dev/layouts/grid/
More info on the flexible nature: https://piccalil.li/tutorial/create-a-responsive-grid-layout-with-no-media-queries-using-css-grid/
A flexible layout that will create an auto-fill grid with
configurable grid item sizes

CUSTOM PROPERTIES AND CONFIGURATION
--gutter (var(--space-s-m)): This defines the space
between each item.

--grid-min-item-size (14rem): How large each item should be
ideally, as a minimum.

--grid-placement (auto-fill): Set either auto-fit or auto-fill
to change how empty grid tracks are handled */
/* Modern reset: https://piccalil.li/blog/a-modern-css-reset/ */

/* Box sizing rules */
*,
*::before,
*::after {
  box-sizing: border-box;
}

/* Remove default margin */
body,
h1,
h2,
h3,
h4,
p,
figure,
blockquote,
dl,
dd {
  margin: 0;
}

/* Remove list styles on ul, ol elements with a list role, which suggests default styling will be removed */
ul[role='list'],
ol[role='list'] {
  list-style: none;
}

/* Prevent zooming when orientation changes on some iOS devices */
html {
  text-size-adjust: none;
  -webkit-text-size-adjust: none;
}

/* Set core root defaults */
html:focus-within {
  scroll-behavior: smooth;
}

/* Set core body defaults */
body {
  min-height: 100vh;
  text-rendering: optimizeSpeed;
  line-height: 1.5;
}

/* A elements that don't have a class get default styles */
a:not([class]) {
  text-decoration-skip-ink: auto;
}

/* Make images easier to work with */
img,
picture {
  max-width: 100%;
  display: block;
}

/* Inherit fonts for inputs and buttons */
input,
button,
textarea,
select {
  font: inherit;
}


.grid {
    display: grid;
    grid-template-columns: repeat(
      var(--grid-placement, auto-fit),
      minmax(var(--grid-min-item-size, 16rem), 1fr)
    );


    /*--gutter: var(--space-s-l); */
    --max: 533px;
    --min: calc(var(--step-0) * 20 );
    

    
    --cols: 3;
    --gaps: calc( ( var(--cols) - 1 ) * var(--gutter));

    --middle: calc(33% - var(--gaps));

    --wrap: var(--wrapper-max-width,100vw);
    --max: calc( var(--wrap)/var(--cols) - calc( ( var(--cols) - 1 ) * var(--gutter)));
    grid-template-columns: repeat(
      var(--grid-placement, auto-fit),
      minmax(clamp(var(--min),var(--middle),var(--max)), 1fr )
    );
    
    gap: var(--gutter, var(--space-s-l));
  }
  
  .grid[data-rows='masonry'] {
    grid-template-rows: masonry;
    align-items: start;
  }
  
  .grid[data-layout='50-50'] {
    --grid-placement: auto-fit;
    --grid-min-item-size: clamp(16rem, 50vw, 26rem);
  }
  


/* 
FLOW UTILITY
Like the Every Layout stack: https://every-layout.dev/layouts/stack/
Info about this implementation: https://piccalil.li/quick-tip/flow-utility/ 
*/
.flow > * + * {
  margin-top: var(--flow-space, 1em);
}


/**
 * REGION 
 * Add consistent vertical padding to create regions of content 
 * Can either be configured by setting --region-space or use a default from the space scale
 */
 .region {
  padding-top: var(--region-space, var(--space-l-2xl));
  padding-bottom: var(--region-space, var(--space-l-2xl));
}


/**
 * WRAPPER
 * Sets a max width, adds a consistent gutter and horizontally
 * centers the contents
 * Info: https://piccalil.li/quick-tip/use-css-clamp-to-create-a-more-flexible-wrapper-utility/
 */
 .wrapper {
  max-width: var(--wrapper-max-width, 85rem);
  margin-left: auto;
  margin-right: auto;
  padding-left: var(--gutter);
  padding-right: var(--gutter);
  position: relative;
}


:root {
  --color-dark: #404040;
  --color-light: #ffffff;
  --color-light-glare: #fff;
  --color-primary: #0042bf;
  --color-primary-glare: #d8e2f4;
  --color-secondary: #ee5141;
  --color-secondary-glare: #ffe3e5;
  --space-xs: clamp(0.75rem,0.69rem + 0.29vw,0.9375rem);
  --space-s: clamp(1rem,0.92rem + 0.39vw,1.25rem);
  --space-m: clamp(1.5rem,1.38rem + 0.58vw,1.875rem);
  --space-l: clamp(2rem,1.84rem + 0.78vw,2.5rem);
  --space-xl: clamp(3rem,2.77rem + 1.17vw,3.75rem);
  --space-2xl: clamp(4rem,3.69rem + 1.55vw,5rem);
  --space-3xl: clamp(6rem,5.53rem + 2.33vw,7.5rem);
  --space-xs-s: clamp(0.75rem,0.59rem + 0.78vw,1.25rem);
  --space-s-m: clamp(1rem,0.73rem + 1.36vw,1.875rem);
  --space-m-l: clamp(1.5rem,1.19rem + 1.55vw,2.5rem);
  --space-l-xl: clamp(2rem,1.46rem + 2.72vw,3.75rem);
  --space-l-2xl: clamp(2rem,1.07rem + 4.66vw,5rem);
  --space-xl-2xl: clamp(3rem,2.38rem + 3.11vw,5rem);
  --space-2xl-3xl: clamp(4rem,2.91rem + 5.44vw,7.5rem);



  --wrapper-max-width: 80em;


  --size-step--2: clamp(0.61rem, calc(0.57rem + 0.17vw), 0.84rem);
  --size-step--1: clamp(0.73rem, calc(0.68rem + 0.23vw), 1.05rem);
  --size-step-0: clamp(0.88rem, calc(0.81rem + 0.31vw), 1.31rem);
  --size-step-1: clamp(1.05rem, calc(0.97rem + 0.42vw), 1.64rem);
  --size-step-2: clamp(1.26rem, calc(1.15rem + 0.56vw), 2.05rem);
  --size-step-3: clamp(1.51rem, calc(1.36rem + 0.75vw), 2.56rem);
  --size-step-4: clamp(1.81rem, calc(1.62rem + 0.99vw), 3.20rem);
  --size-step-5: clamp(2.18rem, calc(1.92rem + 1.31vw), 4.01rem);



  --space-xs: clamp(0.75rem,0.69rem + 0.29vmin,0.9375rem);
  --space-s: clamp(1rem,0.92rem + 0.39vmin,1.25rem);
  --space-m: clamp(1.5rem,1.38rem + 0.58vmin,1.875rem);
  --space-l: clamp(2rem,1.84rem + 0.78vmin,2.5rem);
  --space-xl: clamp(3rem,2.77rem + 1.17vmin,3.75rem);
  --space-2xl: clamp(4rem,3.69rem + 1.55vmin,5rem);
  --space-3xl: clamp(6rem,5.53rem + 2.33vmin,7.5rem);
  --space-xs-s: clamp(0.75rem,0.59rem + 0.78vmin,1.25rem);
  --space-s-m: clamp(1rem,0.73rem + 1.36vmin,1.875rem);
  --space-m-l: clamp(1.5rem,1.19rem + 1.55vmin,2.5rem);
  --space-l-xl: clamp(2rem,1.46rem + 2.72vmin,3.75rem);
  --space-l-2xl: clamp(2rem,1.07rem + 4.66vmin,5rem);
  --space-xl-2xl: clamp(3rem,2.38rem + 3.11vmin,5rem);
  --space-2xl-3xl: clamp(4rem,2.91rem + 5.44vmin,7.5rem);



  
  --step--2: clamp(0.69rem, calc(0.67rem + 0.08vw), 0.77rem);
  --step--1: clamp(0.78rem, calc(0.73rem + 0.25vw), 1.03rem);
  --step-0: clamp(0.88rem, calc(0.78rem + 0.50vw), 1.38rem);
  --step-1: clamp(0.98rem, calc(0.81rem + 0.85vw), 1.83rem);
  --step-2: clamp(1.11rem, calc(0.84rem + 1.34vw), 2.44rem);
  --step-3: clamp(1.25rem, calc(0.84rem + 2.01vw), 3.26rem);
  --step-4: clamp(1.40rem, calc(0.81rem + 2.94vw), 4.34rem);

  --step--3: clamp(0.66rem, calc(0.66rem + 0.01vw), 0.69rem);
  --step--2: clamp(0.74rem, calc(0.72rem + 0.08vw), 0.91rem);
  --step--1: clamp(0.83rem, calc(0.80rem + 0.18vw), 1.22rem);
  --step-0: clamp(0.94rem, calc(0.88rem + 0.31vw), 1.63rem);
  --step-1: clamp(1.06rem, calc(0.95rem + 0.51vw), 2.17rem);
  --step-2: clamp(1.19rem, calc(1.03rem + 0.77vw), 2.89rem);
  --step-3: clamp(1.34rem, calc(1.11rem + 1.14vw), 3.85rem);
  --step-4: clamp(1.50rem, calc(1.17rem + 1.65vw), 5.13rem);
  --step-5: clamp(1.69rem, calc(1.22rem + 2.34vw), 6.84rem);

  --step--3: clamp(0.66rem, calc(0.65rem + 0.04vw), 0.74rem);
  --step--2: clamp(0.74rem, calc(0.72rem + 0.11vw), 0.99rem);
  --step--1: clamp(0.83rem, calc(0.79rem + 0.22vw), 1.31rem);
  --step-0: clamp(0.94rem, calc(0.86rem + 0.37vw), 1.75rem);
  --step-1: clamp(1.06rem, calc(0.94rem + 0.58vw), 2.33rem);
  --step-2: clamp(1.19rem, calc(1.01rem + 0.87vw), 3.11rem);
  --step-3: clamp(1.34rem, calc(1.08rem + 1.28vw), 4.14rem);
  --step-4: clamp(1.50rem, calc(1.14rem + 1.83vw), 5.53rem);
  --step-5: clamp(1.69rem, calc(1.17rem + 2.58vw), 7.37rem);

  --step--3: clamp(0.66rem, calc(0.66rem + 0.00vw), 0.66rem);
  --step--2: clamp(0.74rem, calc(0.72rem + 0.09vw), 0.94rem);
  --step--1: clamp(0.83rem, calc(0.79rem + 0.22vw), 1.33rem);
  --step-0: clamp(0.94rem, calc(0.85rem + 0.43vw), 1.88rem);
  --step-1: clamp(1.06rem, calc(0.91rem + 0.73vw), 2.65rem);
  --step-2: clamp(1.19rem, calc(0.95rem + 1.16vw), 3.75rem);
  --step-3: clamp(1.34rem, calc(0.97rem + 1.80vw), 5.30rem);
  --step-4: clamp(1.50rem, calc(0.96rem + 2.72vw), 7.50rem);
  --step-5: clamp(1.69rem, calc(0.88rem + 4.05vw), 10.60rem);


  --wrapper-max-width: calc( var(--step-0) * 75); /* TODO asi to dělat přes em */
  --wsrapper-max-width: 1600px; /* TODO asi to dělat přes em */

  
  --font-base: Inter,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;
  --font-serif: Georgia,sans-serif;
  --gutter: var(--space-s-m);
  --border-radius: var(--size-step-1);
  --transition-base: 250ms ease;
  --transition-movement: 200ms linear;
  --transition-fade: 200ms ease;
  --transition-bounce: 500ms cubic-bezier(0.5,0.05,0.2,1.5);
  --tracking: -0.05ch;
  --tracking-s: -0.075ch;

  --min-item: calc(var(--step-0) * 15);
  --min-item: 16rem;
  
  --max-item: calc(var(--step-0) * 20);
  --max-item: 20rem;
  
}

body {
  background: var(--color-light);
  color: var(--color-dark);
  font-family: var(--font-base);
  
  font-size: var(--step-0);

  letter-spacing: var(--tracking);
  line-height: 1.4

}
.componentFeature{
    text-align: center;
}



    .grida{ --grid-min-item-size: 12rem;}
    .grid2{ --grid-min-item-size: clamp( var(--min-item), 50vw,  var(--max-item) )}
    .grid3{ --grid-cols: 3; --grid-min-item-size: clamp( var(--min-item), 33%,  calc(var(--wrapper-max-width)/var(--grid-cols) ))}
    .grid4{ --grid-min-item-size: clamp( var(--min-item), 25%, 20rem )}
    .grid5{ --grid-min-item-size: clamp( var(--min-item), 20%, 20rem )}
    .grid6{ --grid-min-item-size: clamp( var(--min-item), 16.666%, 20rem )}



    /* 
  Global styles 

  Low-specificity, global styles that apply to the whole 
  project: https://cube.fyi/css.html
*/


/* Base typesetting */
h1,
h2,
h3 {
  line-height: 1;
  letter-spacing: var(--tracking-s);
}

h1 {
  font-size: var(--size-step-5);
}

h2 {
  font-size: var(--size-step-4);
}

h3 {
  font-size: var(--size-step-3);
}

/* Set line lengths */
p.s,
li,
blockquote:not([class]) {
  max-width: 50ch;
}

h1,
h2,
h3 {
  
}

/* More generic elements */
blockquote:not([class]) {
  font-family: var(--font-serif);
  font-size: var(--size-step-2);
}

/* Markdown blockquuote:not([class])s aren't ideal, so we're presuming the person quoted is the last p */
blockquote:not([class]) p:last-of-type {
  font-family: var(--font-base);
  font-size: var(--size-step-1);
  font-weight: normal;
}

svg {
  height: 2ex;
  width: auto;
  flex: none;
}

[role='list'] {
  padding: 0;
}

/* Base interactive elements */

a {
  color: currentcolor;
}

a:hover {
  text-decoration: none;
}

:focus {
  outline: 2px solid;
  outline-offset: 0.3ch;
}

:target {
  scroll-margin-top: 2ex;
}

main:focus {
  outline: none;
}

/* Base selection styles that invert whatever colours are rendered */
::selection {
  background: var(--color-dark);
  color: var(--color-light);
}




        <?= XcResourcer::getCss(); ?>
    </style>
</head>

<body id="body">
