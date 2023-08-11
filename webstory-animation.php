<!doctype html>
<html ⚡>
<head>
  <meta charset="utf-8">
  <title>My AMP Web Story</title>
  <link rel="canonical" href="my-story.html">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <!-- Add the following script tag to include the 'amp-story' component -->
  <script async custom-element="amp-story" src="https://cdn.ampproject.org/v0/amp-story-1.0.js"></script>
  <style amp-custom>
    /* Add custom styles here */
    body {
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body>
  <!-- AMP Story Header -->
  <amp-story standalone
    title="My AMP Web Story"
    publisher="My Company"
    publisher-logo-src="logo.png"
    poster-portrait-src="poster.jpg">
    <!-- Slide 1 -->
    <amp-story-page id="page1">
      <amp-story-grid-layer template="fill">
        <amp-img src="https://technorizen.com/_WEBSTORY/1.jpg" width="720" height="1280" layout="responsive" animate-in="fade-in" animate-in-duration="2s"></amp-img>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical">
        <h1 animate-in="fade-in" animate-in-duration="2s">Slide 1</h1>
        <p animate-in="slide-up" animate-in-duration="1s">Welcome to my AMP web story.</p>
      </amp-story-grid-layer>
    </amp-story-page>
    <!-- Slide 2 -->
    <amp-story-page id="page2">
      <amp-story-grid-layer template="fill">
        <amp-img src="https://technorizen.com/_WEBSTORY/2.jpg" width="720" height="1280" layout="responsive" animate-in="fade-in" animate-in-duration="2s"></amp-img>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical">
        <h1 animate-in="fade-in" animate-in-duration="2s"><a href="">Slide 2</a></h1>
        <p animate-in="slide-up" animate-in-duration="1s">This is the second slide of the story.</p>
      </amp-story-grid-layer>
    </amp-story-page>
    <!-- Slide 3 -->
    <amp-story-page id="page3">
      <amp-story-grid-layer template="fill">
        <amp-img src="https://technorizen.com/_WEBSTORY/1.jpg" width="720" height="1280" layout="responsive" animate-in="fade-in" animate-in-duration="2s"></amp-img>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical">
        <h1 animate-in="fade-in" animate-in-duration="2s">Slide 3</h1>
        <p animate-in="slide-up" animate-in-duration="1s">And this is the final slide of the story.</p>
      </amp-story-grid-layer>
    </amp-story-page>
  </amp-story>
</body>
</html>
