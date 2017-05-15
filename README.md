# Longform
The Daily News' longform article template

## Header Image & sticky horizontal scroll menu
```html
<section id="ra-ss-header">
    <img alt="" src="HEADER IMAGE HERE">
    <h1 id="ra-ss-headline"> </h1>
    <div id="ra-ss-teasers-sticky-wrapper" class="sticky-wrapper" style="height: 95px;">
        <div id="ra-ss-teasers">
            <div id="ra-ss-teasers-wrap">
                <a class="ra-ss-teaser" value="ANCHOR IDENTIFIER GOES HERE" href="ANCHOR">
                    <img alt="ALT TEXT" src="IMAGE">
                    <p>TEASER TEXT</p>
                </a>
                <a class="ra-ss-teaser" value="ANCHOR IDENTIFIER GOES HERE" href="ANCHOR">
                    <img alt="ALT TEXT" src="IMAGE">
                    <p>TEASER TEXT</p>
                </a>
                <a class="ra-ss-teaser" value="ANCHOR IDENTIFIER GOES HERE" href="ANCHOR">
                    <img alt="ALT TEXT" src="IMAGE">
                    <p>TEASER TEXT</p>
                </a>
                <a value="top" class="ra-ss-teaser more">
                <span>BACK TO TOP</span> </a>
            </div>
                <span class="ri-angle-left off"></span>
                <span class="ri-angle-right on"></span>
            </div>
        </div>
</section>
```
## Images
There are five types on images on the page:
* single image: one image that goes across the article
``` html
<aside class="full">
    <figure class="ra-figure">
        <img alt="ALT TEXT" src="IMAGE SOURCE.jpg">
        <figcaption>
        <h2 class="ra-caption" itemprop="description">PHOTO CAPTION GOES HERE</h2>
        <span class="ra-credit" itemprop="copyrightHolder">(PHOTO CREDIT IN PARENTHESES)</span>
    </figcaption>
    </figure>
</aside>
```
* ra-enlarge: single image with an enlarge (+) icon
``` html
<p><figure class="ra-figure"><span class="ra-enlarge"></span><img alt="ALT TEXT" src="IMAGE SOURCE">
    <figcaption>
        <h2 class="ra-caption" itemprop="description">PHOTO CAPTION GOES HERE</h2>
        <span class="ra-credit" itemprop="copyrightHolder">(PHOTO CREDIT GOES HERE)</span>
    </figcaption>
```
* double truck: Two images side-by-side
```html
<aside class="double-truck">
    <figure class="ra-figure"><img alt="" src="IMAGE SOURCE"></figure>
    <figure class="ra-figure"><img alt="" src="IMAGE SOURCE"></figure>
    <figcaption>
        <h2 class="ra-caption" itemprop="description">PHOTO CAPTION GOES HERE</h2>
        <span class="ra-credit" itemprop="copyrightHolder">(PHOTO CREDIT GOES HERE)</span>
    </figcaption>
</aside>
```
* right vertical
```html
<aside class="right vertical">
    <figure class="ra-figure"><img alt="ALT TEXT" src="IMAGE SOURCE">
    <figcaption>
        <h2 class="ra-caption" itemprop="description">PHOTO CAPTION GOES HERE</h2>
        <span class="ra-credit" itemprop="copyrightHolder">(PHOTO CREDIT GOES HERE)</span>
    </figcaption>
    </figure>
</aside>
```
* left vertical
```html
<aside class="left vertical">
    <figure class="ra-figure"><img alt="ALT TEXT" src="IMAGE SOURCE">
    <figcaption>
        <h2 class="ra-caption" itemprop="description">PHOTO CAPTION GOES HERE</h2>
        <span class="ra-credit" itemprop="copyrightHolder">(PHOTO CREDIT GOES HERE)</span>
    </figcaption>
    </figure>
</aside>
```
* right
```html
<aside class="right">
    <figure class="ra-figure"><img alt="ALT TEXT" src="IMAGE SOURCE">
    <figcaption>
        <h2 class="ra-caption" itemprop="description">PHOTO CAPTION GOES HERE</h2>
        <span class="ra-credit" itemprop="copyrightHolder">(PHOTO CREDIT GOES HERE)</span>
    </figcaption>
    </figure>
</aside>
```
```css
<style>{
    .ra-figure:before
}
</style>
```
## iframe embeds
General iframe, including YouTube
```html
<p><iframe width="100%" height="400" src="SOURCE GOES HERE" frameborder="0" allowfullscreen=""></iframe></p>
```
Instagram
```html
<aside class="full">
    <figure class="instagram-video instagram ra-figure">
        <iframe src="INSTAGRAM LINK GOES HERE" allowtransparency="true" frameborder="0" height="400" scrolling="no" style="background: rgb(255, 255, 255); border: 1px solid rgb(219, 219,219); margin: 1px 1px 12px; max-width: 658px; width: calc(100% - 2px); border-radius: 4px; box-shadow: none; display: block; padding: 0px;">
        </iframe>
    <script async="" defer="" src="//platform.instagram.com/en_US/embeds.js"></script>
    </figure>
</aside>
```
## Dropcaps
```html
<p class="first"></p>
```
## Block quote
```html
<blockquote>“You can make so much money in there, you kind of get lost in the money.”</blockquote>
```
``css
<style>{
    .ra-figure:before
}
</style>
```
## Subhed
```html
<style>{
    display: block;
    margin-bottom: 30px;
    font: bold 26px "Open Sans Condensed";
    text-transform: uppercase;
}
</style>
```
## Global vs. Project-based CSS
Paragraph

