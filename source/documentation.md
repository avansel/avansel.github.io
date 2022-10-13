---
extends: _layouts.docs
section: body
title: "Avansel Viewer Documentation"
author: "Adam Wathan"
---


# Start Here <a id="start-here"></a>

Create a blank HTML file somewhere on your computer with a name like: `avansel.html`.

Using a text editor, fill the file with these contents:

```HTML      
<html>
<head>
    <script async src="https://unpkg.com/es-module-shims@1.3.6/dist/es-module-shims.js"></script>
    <script type="importmap">
        { "imports": { "avansel": "https://unpkg.com/avansel@0.0.12/build/avansel.js" } }
    </script>
    <style>html,body,#pano{width: 100vw; height: 100vh; margin: 0px; padding: 0px;</style>
</head>
<body>
    <div id="pano"></div>
    <script type="module">
        import { Avansel } from "avansel"
        new Avansel(document.querySelector('#pano'))
            .sphere('https://avansel.github.io/assets/pano.jpg')
            .start()
    </script>
</body>
</html>
```

Open your file in a web browser, and if you see a 360 panorama, you're ready to rubmble!

Now that you're all set up to play around, let's look at three practical examples as a foundation for teaching you the basics of Avansel.
By the end of this exercise, you should be more than equipped to start building stuff on your own.

Just three important things here that are necessary to run Avansle Views and present the 360 panorama.

# Install <a id="install"></a>

The example above will work even in your local computer without a web server. On your development server or producion you may use following ways to install Avansel Viewer. 

### Install from npm <a id="npm"></a>

Install Avansel Viewer with npm.

```
npm i avansel
```
Then import Avansel class to your project like this.
```JavaScript
import { Avansel } from "avansel"
```

### Install from CDN or static hosting <a id="cdn"></a>

Include the panorama viewer to your website <head> or via import in your project javascript file from UNPKG and get started in seconds.
```HTML
<script async src="https://unpkg.com/es-module-shims@1.3.6/dist/es-module-shims.js"></script>
<script type="importmap">
    {
        "imports": {
            "avansel": "https://unpkg.com/avansel@0.0.12/build/avansel.js"
        }
    }
</script>
```
Since Import maps are not yet supported by all browsers, it is necessary to add the polyfill `es-module-shims.js`.

# Single Panorama Examples <a id="single-panorama"></a>

Here are cauple of examples on how to use Avansel panorama viewer in your project

### Spherical Panorama <a id="sphere"></a>

The advantage of this menthod is that you this is very easy way to include 360 panorama player to your project. All you need is a single panorama image
in equidistant projection. Most of 360 camera or drones able to export 360 photos in this format.

**Spherical Panorama Example**
```JavaScript
  var container = document.querySelector('#pano')
  new Avansel(container)
    .sphere('/assets/images/park.jpg')
    .start()
```

<div id="pano-sphere" style="height: 500px;" class="mb-3"></div>

The disadvantage of this method is that the zenith and nadir are slightly blurry. To solve that problem I recommend using other ways to 360 panoramas in your project. 

### Multiresolution Panorama <a id="multires"></a>

In this example show the cubical panorama with cube size 5,992 x 5,992 pixels. The source image is 18,828 x 9,414 pixels.

```JavaScript
const container = document.querySelector('#avansel')

const params = [
    { tileSize: 374, size: 374, fallback: true },
    { tileSize: 512, size: 749 },
    { tileSize: 512, size: 1498 },
    { tileSize: 512, size: 2996 },
    { tileSize: 512, size: 5992 },
]

new Avansel(container)
    .multires(params, () => (s, l, x, y) => {
        l = parseInt(l) + 1
        return `/assets/images/multires-1/${l}/${s}${y}_${x}.jpg`
    }).start()
```

<div id="pano-multires" style="height: 500px;" class="mb-3"></div>

Multiresolution panorama view mode let you presen impossible image resolution of cube panorama with cube side size up to 16,777,216 x 16,777,216 pixels. 
Here is [generated example of such panorama](/examples/multires-2). 

