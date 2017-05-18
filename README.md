# Longform
The Daily News' longform article template

## Page elements

### Header Image & sticky horizontal scroll menu
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
### Images
There are six types on images on the page:
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
### iframe embeds
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
### Dropcaps
```html
<p class="first"></p>
```
### Block quote
```html
<blockquote>“You can make so much money in there, you kind of get lost in the money.”</blockquote>
```
```css
<style>{
    .ra-figure:before
}
</style>
```
### Subhed
```html
<style>{
    display: block;
    margin-bottom: 30px;
    font: bold 26px "Open Sans Condensed";
    text-transform: uppercase;
}
</style>
```

### Photo Timeline
HEADLINE
```html
<h3 class="timeline-title" style="margin-bottom:0">ALL CAPS HED HERE</h3>
```
CONTENT<br>
Link two stylesheets
```html
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
```
Add the javascript file
```html
<script type="text/javascript" src="js/slick.min.js"></script>
```
The timeline images
```html
<div class="timeline-holder slick-initialized slick-slider slick-dotted" role="toolbar">
    <button type="button" data-role="none" class="slick-prev slick-arrow slick-disabled" aria-label="Previous" role="button" aria-disabled="true" style="display: block;">Previous</button>
    <div aria-live="polite" class="slick-list draggable">
        <div class="slick-track" style="opacity: 1; width: 4564px; transform: translate3d(0px, 0px, 0px);" role="listbox">
            <div class="event slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 152px;" tabindex="-1" role="option" aria-describedby="slick-slide10">
                <p class="timeline-date">Oct. 15, 2013</p>
                <div class=".hidden">
                    <div><figure><img class="t" alt="ALT TEXT" src="IMAGE GOES HERE" data-pin-nopin="true">
                    <figcaption><h2 class="t-caption" itemprop="description">PHOTO CAPTION GOES HERE <a target="_blank" href="http://www.nydailynews.com/news/politics/cuomo-criticizes-de-blasio-tax-plan-wealthy-article-1.1486929" tabindex="0">CAPTION LINK</a> caption contines over here and here and here.</h2>
                    <span class="ra-credit" itemprop="copyrightHolder">(PHOTOGRAPHER CREDIT)</span></figcaption></figure></div>
                    <p class="timeline-slug">SUBHED UNDER PHOTO</p>
                </div>
            </div>
        </div>
    </div>
</div>
```

## Longform-global vs. specific-longform CSS
We keep the styles used on all longforms and the longform indexes in [style.css](blob/master/www/css/style.css). Each longform article also has its own article-specific stylesheet, usually in `path/to/longform/css/project.css`. Why do some styles go in `style.css` and not `project.css`? Well, if it's a style rule that can *and will* be used across multiple longforms, put it in style.css. Otherwise, to the project.css it goes.

### Example: [Sin City](http://interactive.nydailynews.com/longform/2017/inside-sin-city-bronx-strip-club-anything-goes)
The Sin City longform uses a particular type of navigation to help readers skip to a particular chapter in the story. The CSS for that's stored in its [project.css](http://interactive.nydailynews.com/longform/2017/inside-sin-city-bronx-strip-club-anything-goes/css/project.css) (about halfway down).