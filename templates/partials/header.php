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
.grid {
    display: grid;
    grid-template-columns: repeat(
      var(--grid-placement, auto-fit),
      minmax(var(--grid-min-item-size, 16rem), 1fr)
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


  --wrapper-max-width: calc( var(--step-0) * 75); /* TODO asi to dělat přes em */


  
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

  --min-item: calc(var(--step-0) * 10);
  
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
    font-size: var(--step--1);
    text-align: center;
}



    .grida{ --grid-min-item-size: 12rem;}
    .grid2{ --grid-min-item-size: clamp( var(--min-item), 50vw, 20rem )}
    .grid3{ --grid-min-item-size: clamp( var(--min-item), 33%, 20rem )}
    .grid4{ --grid-min-item-size: clamp( var(--min-item), 25%, 20rem )}
    .grid5{ --grid-min-item-size: clamp( var(--min-item), 20%, 20rem )}
    .grid6{ --grid-min-item-size: clamp( var(--min-item), 16.666%, 20rem )}






        <?= XcResourcer::getCss(); ?>
    </style>
</head>

<body id="body">
