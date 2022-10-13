import { Avansel } from "avansel"
import hljs from 'highlight.js'

var container, params, source

container = document.querySelector('#pano-home')
if(container){
  new Avansel(container)
    .sphere('/assets/images/pano.jpg')
    .start()
}

var container = document.querySelector('#pano-sphere')
if(container){
  new Avansel(container)
    .sphere('/assets/images/park.jpg')
    .start()
}

var container = document.querySelector('#pano-multires')
if(container){
  params = [
    { tileSize: 374, size: 374, fallback: true },
    { tileSize: 512, size: 749 },
    { tileSize: 512, size: 1498 },
    { tileSize: 512, size: 2996 },
    { tileSize: 512, size: 5992 },
  ]
  source = () => (s, l, x, y) => { l = parseInt(l) + 1; return `/assets/images/multires-1/${l}/${s}${y}_${x}.jpg` }
  new Avansel(container)
    .multires(params, source)
    .start()
}

var container = document.querySelector('#pano-multires-16-levels')
if(container){
  params = [...Array(16).keys()].map(i => ({ tileSize: 512, size: 512 * 2 ** i })).map((item, i) => (i == 0 ? {fallback: true, ...item} : item))
  source = () => (s, l, x, y) => `https://dev-api.trvi.tours/tile?size=512&total=1024&side=${s}&x=${x}&y=${y}&level=${l}`
  new Avansel(container)
    .multires(params, source)
    .start()
}

document.querySelectorAll('code').forEach(el => {
  hljs.highlightElement(el)
});