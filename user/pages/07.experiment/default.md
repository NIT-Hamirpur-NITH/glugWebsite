---
title: experiment
---

<script>
var metas = document.getElementsByTagName('meta');
var i;
if (navigator.userAgent.match(/iPhone/i)) {
  for (i=0; i<metas.length; i++) {
    if (metas[i].name == "viewport") {
      metas[i].content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
    }
  }
  document.addEventListener("gesturestart", gestureStart, false);
}
function gestureStart() {
  for (i=0; i<metas.length; i++) {
    if (metas[i].name == "viewport") {
      metas[i].content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
    }
  }
}
</script>
<style>
/*
The MIT License (MIT)

Copyright (c) 2016 GitHub, Inc.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

*/

.pl-c /* comment */ {
  color: #969896;
}

.pl-c1 /* constant, variable.other.constant, support, meta.property-name, support.constant, support.variable, meta.module-reference, markup.raw, meta.diff.header */,
.pl-s .pl-v /* string variable */ {
  color: #0086b3;
}

.pl-e /* entity */,
.pl-en /* entity.name */ {
  color: #795da3;
}

.pl-smi /* variable.parameter.function, storage.modifier.package, storage.modifier.import, storage.type.java, variable.other */,
.pl-s .pl-s1 /* string source */ {
  color: #333;
}

.pl-ent /* entity.name.tag */ {
  color: #63a35c;
}

.pl-k /* keyword, storage, storage.type */ {
  color: #a71d5d;
}

.pl-s /* string */,
.pl-pds /* punctuation.definition.string, string.regexp.character-class */,
.pl-s .pl-pse .pl-s1 /* string punctuation.section.embedded source */,
.pl-sr /* string.regexp */,
.pl-sr .pl-cce /* string.regexp constant.character.escape */,
.pl-sr .pl-sre /* string.regexp source.ruby.embedded */,
.pl-sr .pl-sra /* string.regexp string.regexp.arbitrary-repitition */ {
  color: #183691;
}

.pl-v /* variable */ {
  color: #ed6a43;
}

.pl-id /* invalid.deprecated */ {
  color: #b52a1d;
}

.pl-ii /* invalid.illegal */ {
  color: #f8f8f8;
  background-color: #b52a1d;
}

.pl-sr .pl-cce /* string.regexp constant.character.escape */ {
  font-weight: bold;
  color: #63a35c;
}

.pl-ml /* markup.list */ {
  color: #693a17;
}

.pl-mh /* markup.heading */,
.pl-mh .pl-en /* markup.heading entity.name */,
.pl-ms /* meta.separator */ {
  font-weight: bold;
  color: #1d3e81;
}

.pl-mq /* markup.quote */ {
  color: #008080;
}

.pl-mi /* markup.italic */ {
  font-style: italic;
  color: #333;
}

.pl-mb /* markup.bold */ {
  font-weight: bold;
  color: #333;
}

.pl-md /* markup.deleted, meta.diff.header.from-file */ {
  color: #bd2c00;
  background-color: #ffecec;
}

.pl-mi1 /* markup.inserted, meta.diff.header.to-file */ {
  color: #55a532;
  background-color: #eaffea;
}

.pl-mdr /* meta.diff.range */ {
  font-weight: bold;
  color: #795da3;
}

.pl-mo /* meta.output */ {
  color: #1d3e81;
}


</style>

HTML is working great
<a href="example.com">This is a trial</a>
<p>This is paragraph 1</p>
<p>This is paragraph 2</p>
<p>This is paragraph 3</p>
<img src="http://octodex.github.com/images/octdrey-catburn.jpg" width="300px" />

 
<a id="welcome-to-github-pages" class="anchor" href="#welcome-to-github-pages" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>Welcome to GitHub Pages.</h3>

<p>This automatic page generator is the easiest way to create beautiful pages for all of your projects. Author your page content here <a href="https://guides.github.com/features/mastering-markdown/">using GitHub Flavored Markdown</a>, select a template crafted by a designer, and publish. After your page is generated, you can check out the new <code>gh-pages</code> branch locally. If you’re using GitHub Desktop, simply sync your repository and you’ll see the new branch.</p>

<h3>
<a id="designer-templates" class="anchor" href="#designer-templates" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>Designer Templates</h3>

<p>We’ve crafted some handsome templates for you to use. Go ahead and click 'Continue to layouts' to browse through them. You can easily go back to edit your page before publishing. After publishing your page, you can revisit the page generator and switch to another theme. Your Page content will be preserved.</p>

<h3>
<a id="creating-pages-manually" class="anchor" href="#creating-pages-manually" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>Creating pages manually</h3>

<p>If you prefer to not use the automatic generator, push a branch named <code>gh-pages</code> to your repository to create a page manually. In addition to supporting regular HTML content, GitHub Pages support Jekyll, a simple, blog aware static site generator. Jekyll makes it easy to create site-wide headers and footers without having to copy them across every page. It also offers intelligent blog support and other advanced templating features.</p>

<h3>
<a id="authors-and-contributors" class="anchor" href="#authors-and-contributors" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>Authors and Contributors</h3>

<p>You can @mention a GitHub username to generate a link to their profile. The resulting <code>&lt;a&gt;</code> element will link to the contributor’s GitHub Profile. For example: In 2007, Chris Wanstrath (<a href="https://github.com/defunkt" class="user-mention">@defunkt</a>), PJ Hyett (<a href="https://github.com/pjhyett" class="user-mention">@pjhyett</a>), and Tom Preston-Werner (<a href="https://github.com/mojombo" class="user-mention">@mojombo</a>) founded GitHub.</p>

<h3>
<a id="support-or-contact" class="anchor" href="#support-or-contact" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>Support or Contact</h3>

<p>Having trouble with Pages? Check out our <a href="https://help.github.com/pages">documentation</a> or <a href="https://github.com/contact">contact support</a> and we’ll help you sort it out.</p>
      </section>
      <footer>
        <p>This project is maintained by <a href="https://github.com/Rishabh04-02">Rishabh04-02</a></p>
        <p><small>Hosted on GitHub Pages &mdash; Theme by <a href="https://github.com/orderedlist">orderedlist</a></small></p>
      </footer>
    </div>
    <script src="javascripts/scale.fix.js"></script>
    



