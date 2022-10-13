---
extends: _layouts.home
section: body
title: "Avansel Viewer"
author: "Roman Grinev"
---

HTML
```HTML
<div id="pano"></div>
```

JavaScript
```JavaScript
import { Avansel } from "avansel"
new Avansel(document.querySelector('#pano'))
  .sphere('/assets/pano.jpg')
  .start()
```

We want to have a JavaScript Panorama/Virtual Tour viewer that:

* Free
* Easy to use
* Opensource

With features of

* Multiresolution
* Plugins and Modules
* Support hotspots, polygons

