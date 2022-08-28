
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="csrf-token" content="6UUcxeZXtZ33vFXIbWR37kJXw0qq6l9inYC6RqZB">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset ('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset ('AdminLTE/dist/css/adminlte.min.css') }}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<link rel="stylesheet" href="{{ asset ('AdminLTE/plugins/select2/css/select2.min.css') }}">

    <style>
        .highcharts-credits {
            display: none
        }
    </style>


<style>
    .select2-selection {
        height: 38px !important;
    }
</style>
    <title>Dashboard | Laravel</title>
                <style>
        .highcharts-credits {
            display: none
        }
    </style>
<link rel='stylesheet' type='text/css' property='stylesheet' href='//kc.advancesols.com/_debugbar/assets/stylesheets?v=1644393152&theme=auto'><script src='//kc.advancesols.com/_debugbar/assets/javascript?v=1644393152'></script><script>jQuery.noConflict(true);</script>
<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; refStyle.innerHTML = '.phpdebugbar pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }'; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); refStyle = doc.createElement('style'); (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\bsf-dump-compact\b/.test(oldClass)) { arrow = '▼'; newClass = 'sf-dump-expanded'; } else if (/\bsf-dump-expanded\b/.test(oldClass)) { arrow = '▶'; newClass = 'sf-dump-compact'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent('Event'); event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass); if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-expanded\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-compact\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector('a.sf-dump-toggle'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\bsf-dump-highlight\b/.test(node.className)) { node.className = node.className + ' sf-dump-highlight'; } }); if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) { activeNode.className = activeNode.className + ' sf-dump-highlight-active'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll('.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, ''); strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, ''); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), options = {"maxDepth":1,"maxStringLength":160,"fileLinkFormat":false}, elt = root.getElementsByTagName('A'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e, n) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else { n = /\bsf-dump-ellipsis\b/.test(e.target.className) ? e.target.parentNode : e.target; if ((n = n.nextElementSibling) && 'A' == n.tagName) { if (!/\bsf-dump-toggle\b/.test(n.className)) { n = n.nextElementSibling || n; } f(n, e, true); } } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^'"]+|['"]/g).map(function (part) { if ("'" == part) { return '"\'"'; } if ('"' == part) { return "'\"'"; } return "'" + part + "'"; }); return "concat(" + parts.join(",") + ", '')"; } function xpathHasClass(className) { return "contains(concat(' ', normalize-space(@class), ' '), ' " + className +" ')"; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a, e, c) { if (c) { e.target.style.cursor = "pointer"; } else if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = '.phpdebugbar pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e, c) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if (/\bsf-dump-compact\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\bsf-dump-str-toggle\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a.parentNode.className); } }); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if ('SAMP' == elt.tagName) { a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += elt.className == 'sf-dump-compact' ? '<span>▶</span>' : '<span>▼</span>'; a.className += ' sf-dump-toggle'; x = 1; if ('sf-dump' != elt.parentNode.className) { x += elt.parentNode.getAttribute('data-depth')/1; } } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) { a = a.substr(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>▶</span>'; } else { elt.innerHTML = '<span>▶</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '…'; elt.className = 'sf-dump-ref'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute('tabindex', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(), currentRect, searchRect; if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if ('scrollIntoView' in currentNode) { currentNode.scrollIntoView(true); currentRect = currentNode.getBoundingClientRect(); searchRect = search.getBoundingClientRect(); if (currentRect.top < (searchRect.top + searchRect.height)) { window.scrollBy(0, -(searchRect.top + searchRect.height + 5)); } } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count(); } var search = doc.createElement('div'); search.className = 'sf-dump-search-wrapper sf-dump-search-hidden'; search.innerHTML = ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> '; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector('.sf-dump-search-input'); var counter = search.querySelector('.sf-dump-search-count'); var searchInputTimer = 0; var previousSearchQuery = ''; addEventListener(searchInput, 'keyup', function (e) { var searchQuery = e.target.value; /* Don't perform anything if the pressed key didn't change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if ('' === searchQuery) { counter.textContent = '0 of 0'; return; } var classMatches = [ "sf-dump-str", "sf-dump-key", "sf-dump-public", "sf-dump-protected", "sf-dump-private", ].map(xpathHasClass).join(' or '); var xpathResult = doc.evaluate('.//span[' + classMatches + '][contains(translate(child::text(), ' + xpathString(searchQuery.toUpperCase()) + ', ' + xpathString(searchQuery.toLowerCase()) + '), ' + xpathString(searchQuery.toLowerCase()) + ')]', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll('.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function (btn) { addEventListener(btn, 'click', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf('next') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, 'keydown', function (e) { var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */ return; } e.preventDefault(); search.className = search.className.replace(/\bsf-dump-search-hidden\b/, ''); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += ' sf-dump-search-hidden'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = ''; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll('.sf-dump-str'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options.maxStringLength); elt.className += ' sf-dump-str-collapse'; elt.innerHTML = '<span class=sf-dump-str-collapse>'+h+'<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span>'+ '<span class=sf-dump-str-expand>'+elt.innerHTML+'<a class="sf-dump-ref sf-dump-str-toggle" title="'+x+' remaining characters"> ▶</a></span>'; } } } catch (e) { } }; })(document); </script><style> .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } .phpdebugbar pre.sf-dump:after { content: ""; visibility: hidden; display: block; height: 0; clear: both; } .phpdebugbar pre.sf-dump span { display: inline; } .phpdebugbar pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } .phpdebugbar pre.sf-dump img { max-width: 50em; max-height: 50em; margin: .5em 0 0 0; padding: 0; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } .phpdebugbar pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-hidden { display: none !important; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper { font-size: 0; white-space: nowrap; margin-bottom: 5px; display: flex; position: -webkit-sticky; position: sticky; top: 5px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; min-width: 15px; width: 100%; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }.phpdebugbar pre.sf-dump, .phpdebugbar pre.sf-dump .sf-dump-default{word-wrap: break-word; white-space: pre-wrap; word-break: normal}.phpdebugbar pre.sf-dump .sf-dump-num{font-weight:bold; color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-const{font-weight:bold}.phpdebugbar pre.sf-dump .sf-dump-str{font-weight:bold; color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-note{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ref{color:#7B7B7B}.phpdebugbar pre.sf-dump .sf-dump-public{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-protected{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-private{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-meta{color:#B729D9}.phpdebugbar pre.sf-dump .sf-dump-key{color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-index{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ellipsis{color:#A0A000}.phpdebugbar pre.sf-dump .sf-dump-ns{user-select:none;}.phpdebugbar pre.sf-dump .sf-dump-ellipsis-note{color:#1299DA}
</style>
<!-- toaster css -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="{{ route('admin.dashboard') }}" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">Home</a>
        </li>
        
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{ asset('AdminLTE/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{ asset('AdminLTE/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{ asset('AdminLTE/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
    <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="http://kc.advancesols.com/AdminLTE/dist/img/AdminLTELogo.png" alt="Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Hello World</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('uploads/profile-pictures/default.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="http://kc.advancesols.com/admin/profile" class="d-block">Superuser</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview ">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Orders
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('order-details.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Order Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('order-details.shippingOrders') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Shipping Orders</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>On Hold</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Shipped</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Declined</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{ route('order-details.deliveredOrders') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Completed</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pending Payment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Failed Payment</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{ route('order-details.canceledOrders') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cancelled</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Refunded</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route ('product.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Products</p>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="{{ route ('refundable-sample.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Refundable Sample</p>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="{{ route ('product-inventory.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inventory</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route ('product-categories.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route ('product-subcategories.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route ('product-accessories.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Accessories</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="{{ url ('admin/product-subcategories-tags') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Categories Tags</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url ('admin/product-tags') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tags</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route ('product-colors.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Colors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url ('admin/product-sizes') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sizes</p>
                            </a>
                        </li> -->
                    </ul>
                </li>

                <li class="nav-item has-treeview ">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            FAQs
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('faqs.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Faqs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faqs-filters.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Faqs Filters</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Customers
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contact-us.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Contact Us
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="http://kc.advancesols.com/admin/home-data" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://kc.advancesols.com/admin/shipping-methods" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Shipping Methods</p>
                            </a>
                        </li>

<!--                        <li class="nav-item">
                            <a href="http://kc.advancesols.com/admin/shippers" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Shippers</p>
                            </a>
                        </li>-->

                                            </ul> 
                </li>

                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                    <!-- <a href="http://kc.advancesols.com/logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a> -->
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            @yield('content')
    <!-- /.content -->
    </div>

    <!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
 
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <a href="#">Laravel</a>.</strong> All rights reserved.
</footer>
</div>

<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>

<script src="{{ asset('AdminLTE/plugins/select2/js/select2.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('AdminLTE/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/highcharts/highcharts.js') }}"></script>

    <!-- PAGE SCRIPTS -->
    <script src="{{ asset('AdminLTE/dist/js/pages/dashboard2.js') }}"></script>
    <script src="{{ asset('js/browerUsage.js') }}"></script>
<script type="text/javascript">
var phpdebugbar = new PhpDebugBar.DebugBar();
phpdebugbar.addIndicator("php_version", new PhpDebugBar.DebugBar.Indicator({"icon":"code","tooltip":"PHP Version"}), "right");
phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Messages", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({"icon":"clock-o","tooltip":"Request Duration"}), "right");
phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({"icon":"tasks","title":"Timeline", "widget": new PhpDebugBar.Widgets.TimelineWidget()}));
phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({"icon":"cogs","tooltip":"Memory Usage"}), "right");
phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({"icon":"bug","title":"Exceptions", "widget": new PhpDebugBar.Widgets.ExceptionsWidget()}));
phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({"icon":"leaf","title":"Views", "widget": new PhpDebugBar.Widgets.TemplatesWidget()}));
phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({"icon":"share","title":"Route", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({"icon":"share","tooltip":"Route"}), "right");
phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({"icon":"database","title":"Queries", "widget": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()}));
phpdebugbar.addTab("models", new PhpDebugBar.DebugBar.Tab({"icon":"cubes","title":"Models", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.addTab("emails", new PhpDebugBar.DebugBar.Tab({"icon":"inbox","title":"Mails", "widget": new PhpDebugBar.Widgets.MailsWidget()}));
phpdebugbar.addTab("gate", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Gate", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({"icon":"archive","title":"Session", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({"icon":"tags","title":"Request", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.setDataMap({
"php_version": ["php.version", ],
"messages": ["messages.messages", []],
"messages:badge": ["messages.count", null],
"time": ["time.duration_str", '0ms'],
"timeline": ["time", {}],
"memory": ["memory.peak_usage_str", '0B'],
"exceptions": ["exceptions.exceptions", []],
"exceptions:badge": ["exceptions.count", null],
"views": ["views", []],
"views:badge": ["views.nb_templates", 0],
"route": ["route", {}],
"currentroute": ["route.uri", ],
"queries": ["queries", []],
"queries:badge": ["queries.nb_statements", 0],
"models": ["models.data", {}],
"models:badge": ["models.count", 0],
"emails": ["swiftmailer_mails.mails", []],
"emails:badge": ["swiftmailer_mails.count", null],
"gate": ["gate.messages", []],
"gate:badge": ["gate.count", null],
"session": ["session", {}],
"request": ["request", {}]
});
phpdebugbar.restoreState();
phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);
phpdebugbar.ajaxHandler.bindToFetch();
phpdebugbar.ajaxHandler.bindToXHR();
phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({"url":"http:\/\/kc.advancesols.com\/_debugbar\/open"}));
phpdebugbar.addDataSet({"__meta":{"id":"Xca6e316a238724fd178cbb419709f15f","datetime":"2022-06-11 10:09:00","utime":1654942140.653172,"method":"GET","uri":"\/admin","ip":"39.41.117.175"},"php":{"version":"8.0.19","interface":"cgi-fcgi"},"messages":{"count":0,"messages":[]},"time":{"start":1654942140.372541,"end":1654942140.65319,"duration":0.28064894676208496,"duration_str":"281ms","measures":[{"label":"Booting","start":1654942140.372541,"relative_start":0,"end":1654942140.521893,"relative_end":1654942140.521893,"duration":0.1493520736694336,"duration_str":"149ms","params":[],"collector":null},{"label":"Application","start":1654942140.524816,"relative_start":0.15227508544921875,"end":1654942140.653192,"relative_end":2.1457672119140625e-6,"duration":0.12837600708007812,"duration_str":"128ms","params":[],"collector":null}]},"memory":{"peak_usage":25345216,"peak_usage_str":"24MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":7,"templates":[{"name":"backend.dashboard.dashboard (resources\/views\/backend\/dashboard\/dashboard.blade.php)","param_count":0,"params":[],"type":"blade"},{"name":"layouts.admin (resources\/views\/layouts\/admin.blade.php)","param_count":15,"params":["__env","app","url","dir","errors","thisMonthUsers","latest_customers","__currentLoopData","latest_customer","loop","latest_orders","inventoryCount","latest_products","latest_product","title"],"type":"blade"},{"name":"components.backend-head (resources\/views\/components\/backend-head.blade.php)","param_count":4,"params":["componentName","attributes","slot","__laravel_slots"],"type":"blade"},{"name":"components.backend-topbar (resources\/views\/components\/backend-topbar.blade.php)","param_count":4,"params":["componentName","attributes","slot","__laravel_slots"],"type":"blade"},{"name":"components.backend-sidebar (resources\/views\/components\/backend-sidebar.blade.php)","param_count":4,"params":["componentName","attributes","slot","__laravel_slots"],"type":"blade"},{"name":"components.backend-footer (resources\/views\/components\/backend-footer.blade.php)","param_count":4,"params":["componentName","attributes","slot","__laravel_slots"],"type":"blade"},{"name":"components.backend-scripts (resources\/views\/components\/backend-scripts.blade.php)","param_count":4,"params":["componentName","attributes","slot","__laravel_slots"],"type":"blade"}]},"route":{"uri":"GET admin","middleware":"web, role:superuser|developer","controller":"App\\Http\\Controllers\\Backend\\DashboardController@index","namespace":null,"where":[],"as":"generated::uEDWrMk6OiRxfMX9","prefix":"admin","file":"<a href=\"phpstorm:\/\/open?file=\/home\/advances\/KC.advancesols.com\/app\/Http\/Controllers\/Backend\/DashboardController.php&line=23\">app\/Http\/Controllers\/Backend\/DashboardController.php:23-26<\/a>"},"queries":{"nb_statements":17,"nb_failed_statements":0,"accumulated_duration":0.030120000000000004,"accumulated_duration_str":"30.12ms","statements":[{"sql":"select * from `users` where `id` = 1 limit 1","type":"query","params":[],"bindings":["1"],"hints":null,"show_copy":false,"backtrace":[{"index":15,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/EloquentUserProvider.php","line":53},{"index":16,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/SessionGuard.php","line":148},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/GuardHelpers.php","line":60},{"index":18,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/GuardHelpers.php","line":70},{"index":19,"namespace":"middleware","name":"role","line":13}],"duration":0.01251,"duration_str":"12.51ms","stmt_id":"\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/EloquentUserProvider.php:53","connection":"advances_kc_db","start_percent":0,"width_percent":41.534},{"sql":"select column_name as `column_name` from information_schema.columns where table_schema = 'advances_kc_db' and table_name = 'roles'","type":"query","params":[],"bindings":["advances_kc_db","roles"],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":null,"name":"\/vendor\/spatie\/laravel-permission\/src\/Models\/Role.php","line":26},{"index":17,"namespace":null,"name":"\/vendor\/spatie\/laravel-permission\/src\/Traits\/HasRoles.php","line":47},{"index":22,"namespace":null,"name":"\/vendor\/spatie\/laravel-permission\/src\/Traits\/HasRoles.php","line":185},{"index":23,"namespace":null,"name":"\/vendor\/spatie\/laravel-permission\/src\/Traits\/HasRoles.php","line":200},{"index":24,"namespace":null,"name":"\/vendor\/spatie\/laravel-permission\/src\/Traits\/HasRoles.php","line":200}],"duration":0.0016200000000000001,"duration_str":"1.62ms","stmt_id":"\/vendor\/spatie\/laravel-permission\/src\/Models\/Role.php:26","connection":"advances_kc_db","start_percent":41.534,"width_percent":5.378},{"sql":"select `roles`.*, `user_has_roles`.`user_id` as `pivot_user_id`, `user_has_roles`.`role_id` as `pivot_role_id`, `user_has_roles`.`model_type` as `pivot_model_type` from `roles` inner join `user_has_roles` on `roles`.`id` = `user_has_roles`.`role_id` where `user_has_roles`.`user_id` = 1 and `user_has_roles`.`model_type` = 'App\\Models\\User'","type":"query","params":[],"bindings":["1","App\\Models\\User"],"hints":null,"show_copy":false,"backtrace":[{"index":19,"namespace":null,"name":"\/vendor\/spatie\/laravel-permission\/src\/Traits\/HasRoles.php","line":185},{"index":20,"namespace":null,"name":"\/vendor\/spatie\/laravel-permission\/src\/Traits\/HasRoles.php","line":200},{"index":21,"namespace":null,"name":"\/vendor\/spatie\/laravel-permission\/src\/Traits\/HasRoles.php","line":200},{"index":22,"namespace":null,"name":"\/vendor\/spatie\/laravel-permission\/src\/Traits\/HasRoles.php","line":222},{"index":23,"namespace":"middleware","name":"role","line":21}],"duration":0.00094,"duration_str":"940\u03bcs","stmt_id":"\/vendor\/spatie\/laravel-permission\/src\/Traits\/HasRoles.php:185","connection":"advances_kc_db","start_percent":46.912,"width_percent":3.121},{"sql":"select count(*) as aggregate from `orders` where `status` = 'Completed'","type":"query","params":[],"bindings":["Completed"],"hints":null,"show_copy":false,"backtrace":[{"index":15,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":31},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":18,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":19,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":20,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.00229,"duration_str":"2.29ms","stmt_id":"view::c7b411d4705394ceabdbff891828386f48ca6647:31","connection":"advances_kc_db","start_percent":50.033,"width_percent":7.603},{"sql":"select count(*) as aggregate from `orders` where `status` = 'Processing'","type":"query","params":[],"bindings":["Processing"],"hints":null,"show_copy":false,"backtrace":[{"index":15,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":47},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":18,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":19,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":20,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.00049,"duration_str":"490\u03bcs","stmt_id":"view::c7b411d4705394ceabdbff891828386f48ca6647:47","connection":"advances_kc_db","start_percent":57.636,"width_percent":1.627},{"sql":"select count(*) as aggregate from `orders` where `status` = 'Shipped'","type":"query","params":[],"bindings":["Shipped"],"hints":null,"show_copy":false,"backtrace":[{"index":15,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":65},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":18,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":19,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":20,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.0004,"duration_str":"400\u03bcs","stmt_id":"view::c7b411d4705394ceabdbff891828386f48ca6647:65","connection":"advances_kc_db","start_percent":59.263,"width_percent":1.328},{"sql":"select count(*) as aggregate from `users` where `created_at` >= '2022-05-12 10:09:00'","type":"query","params":[],"bindings":["2022-05-12 10:09:00"],"hints":null,"show_copy":false,"backtrace":[{"index":15,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":77},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":18,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":19,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":20,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.0005,"duration_str":"500\u03bcs","stmt_id":"view::c7b411d4705394ceabdbff891828386f48ca6647:77","connection":"advances_kc_db","start_percent":60.591,"width_percent":1.66},{"sql":"select * from `roles` where `name` = 'customer' and `guard_name` = 'web' limit 1","type":"query","params":[],"bindings":["customer","web"],"hints":null,"show_copy":false,"backtrace":[{"index":15,"namespace":null,"name":"\/vendor\/spatie\/laravel-permission\/src\/Models\/Role.php","line":86},{"index":16,"namespace":null,"name":"\/vendor\/spatie\/laravel-permission\/src\/Traits\/HasRoles.php","line":78},{"index":27,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":500},{"index":29,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":30,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58}],"duration":0.00057,"duration_str":"570\u03bcs","stmt_id":"\/vendor\/spatie\/laravel-permission\/src\/Models\/Role.php:86","connection":"advances_kc_db","start_percent":62.251,"width_percent":1.892},{"sql":"select * from `users` where exists (select * from `roles` inner join `user_has_roles` on `roles`.`id` = `user_has_roles`.`role_id` where `users`.`id` = `user_has_roles`.`user_id` and `user_has_roles`.`model_type` = 'App\\Models\\User' and `roles`.`id` in (3)) order by `id` desc limit 8","type":"query","params":[],"bindings":["App\\Models\\User","3"],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":500},{"index":16,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":18,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":19,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.0009,"duration_str":"900\u03bcs","stmt_id":"view::c7b411d4705394ceabdbff891828386f48ca6647:500","connection":"advances_kc_db","start_percent":64.143,"width_percent":2.988},{"sql":"select * from `orders` order by `id` desc limit 10","type":"query","params":[],"bindings":[],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":563},{"index":16,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":18,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":19,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.00066,"duration_str":"660\u03bcs","stmt_id":"view::c7b411d4705394ceabdbff891828386f48ca6647:563","connection":"advances_kc_db","start_percent":67.131,"width_percent":2.191},{"sql":"select sum(`totalRemaining`) as aggregate from `inventories`","type":"query","params":[],"bindings":[],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":617},{"index":16,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":18,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":19,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.0020099999999999996,"duration_str":"2.01ms","stmt_id":"view::c7b411d4705394ceabdbff891828386f48ca6647:617","connection":"advances_kc_db","start_percent":69.323,"width_percent":6.673},{"sql":"select * from `products` where `products`.`deleted_at` is null order by `id` desc limit 4","type":"query","params":[],"bindings":[],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":688},{"index":16,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":18,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":19,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.00198,"duration_str":"1.98ms","stmt_id":"view::c7b411d4705394ceabdbff891828386f48ca6647:688","connection":"advances_kc_db","start_percent":75.996,"width_percent":6.574},{"sql":"select * from `images` where `images`.`imageable_type` = 'App\\Models\\Products' and `images`.`imageable_id` = 87 and `images`.`imageable_id` is not null order by `created_at` desc limit 1","type":"query","params":[],"bindings":["App\\Models\\Products","87"],"hints":null,"show_copy":false,"backtrace":[{"index":20,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":710},{"index":22,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":23,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":24,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":25,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.0022,"duration_str":"2.2ms","stmt_id":"view::c7b411d4705394ceabdbff891828386f48ca6647:710","connection":"advances_kc_db","start_percent":82.57,"width_percent":7.304},{"sql":"select * from `images` where `images`.`imageable_type` = 'App\\Models\\Products' and `images`.`imageable_id` = 86 and `images`.`imageable_id` is not null order by `created_at` desc limit 1","type":"query","params":[],"bindings":["App\\Models\\Products","86"],"hints":null,"show_copy":false,"backtrace":[{"index":20,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":710},{"index":22,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":23,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":24,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":25,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.0007700000000000001,"duration_str":"770\u03bcs","stmt_id":"view::c7b411d4705394ceabdbff891828386f48ca6647:710","connection":"advances_kc_db","start_percent":89.874,"width_percent":2.556},{"sql":"select * from `images` where `images`.`imageable_type` = 'App\\Models\\Products' and `images`.`imageable_id` = 85 and `images`.`imageable_id` is not null order by `created_at` desc limit 1","type":"query","params":[],"bindings":["App\\Models\\Products","85"],"hints":null,"show_copy":false,"backtrace":[{"index":20,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":710},{"index":22,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":23,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":24,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":25,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.00069,"duration_str":"690\u03bcs","stmt_id":"view::c7b411d4705394ceabdbff891828386f48ca6647:710","connection":"advances_kc_db","start_percent":92.43,"width_percent":2.291},{"sql":"select * from `images` where `images`.`imageable_type` = 'App\\Models\\Products' and `images`.`imageable_id` = 84 and `images`.`imageable_id` is not null order by `created_at` desc limit 1","type":"query","params":[],"bindings":["App\\Models\\Products","84"],"hints":null,"show_copy":false,"backtrace":[{"index":20,"namespace":"view","name":"c7b411d4705394ceabdbff891828386f48ca6647","line":710},{"index":22,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":23,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":24,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":25,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.0007199999999999999,"duration_str":"720\u03bcs","stmt_id":"view::c7b411d4705394ceabdbff891828386f48ca6647:710","connection":"advances_kc_db","start_percent":94.721,"width_percent":2.39},{"sql":"select * from `images` where `images`.`imageable_type` = 'App\\Models\\User' and `images`.`imageable_id` = 1 and `images`.`imageable_id` is not null order by `created_at` desc limit 1","type":"query","params":[],"bindings":["App\\Models\\User","1"],"hints":null,"show_copy":false,"backtrace":[{"index":21,"namespace":"view","name":"e9c081c3964f8bc16951f361129d38d4f06215f8","line":16},{"index":23,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php","line":108},{"index":24,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php","line":58},{"index":25,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php","line":61},{"index":26,"namespace":null,"name":"\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php","line":37}],"duration":0.00087,"duration_str":"870\u03bcs","stmt_id":"view::e9c081c3964f8bc16951f361129d38d4f06215f8:16","connection":"advances_kc_db","start_percent":97.112,"width_percent":2.888}]},"models":{"data":{"App\\Models\\Image":5,"App\\Models\\Products":4,"Spatie\\Permission\\Models\\Role":2,"App\\Models\\User":2},"count":13},"swiftmailer_mails":{"count":0,"mails":[]},"gate":{"count":0,"messages":[]},"session":{"_token":"6UUcxeZXtZ33vFXIbWR37kJXw0qq6l9inYC6RqZB","_previous":"array:1 [\n  \"url\" => \"http:\/\/kc.advancesols.com\/admin\"\n]","_flash":"array:2 [\n  \"old\" => []\n  \"new\" => []\n]","login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d":"1","auth":"array:1 [\n  \"password_confirmed_at\" => 1654942139\n]","PHPDEBUGBAR_STACK_DATA":"[]"},"request":{"path_info":"\/admin","status_code":"<pre class=sf-dump id=sf-dump-398958823 data-indent-pad=\"  \"><span class=sf-dump-num>200<\/span>\n<\/pre><script>Sfdump(\"sf-dump-398958823\", {\"maxDepth\":0})<\/script>\n","status_text":"OK","format":"html","content_type":"text\/html; charset=UTF-8","request_query":"<pre class=sf-dump id=sf-dump-1571233550 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1571233550\", {\"maxDepth\":0})<\/script>\n","request_request":"<pre class=sf-dump id=sf-dump-451292415 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-451292415\", {\"maxDepth\":0})<\/script>\n","request_headers":"<pre class=sf-dump id=sf-dump-1181694520 data-indent-pad=\"  \"><span class=sf-dump-note>array:10<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>accept<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-encoding<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"13 characters\">gzip, deflate<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-language<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"14 characters\">en-US,en;q=0.9<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"9 characters\">max-age=0<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>connection<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cookie<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"713 characters\">XSRF-TOKEN=eyJpdiI6ImcwbFdoNzNKVkNmaVZ5SVJmVHZFNnc9PSIsInZhbHVlIjoiY3QraDRwc1M3WTdaQWxHSzJ5c2lKaHc3dlV2UU0wWnphN1Z6My9wOCsrSFFQZlRJbDBCVHdkSFIvK3JUMnhYaEJieXZ3aWFKMVFMWGtwdUxTRjVIMFlVWFdPcTNLS29HZFhyNVVxbkhFMCs5bk9YN0kvTk5aejRaUExqZG9DY1giLCJtYWMiOiI0YzdkOGUyMTY1YjI1NjFiMmVjZjhmZDhlYTMwZTI4ZWU2Yzg4OTI2ZWU1ZjRhYTNkYWViMmRiM2QxZjY2YmZhIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImNYOEJCVUhIY1JSeG9HWVZrSXVCWEE9PSIsInZhbHVlIjoiYTN0L3lOSmpLZjcrNHRsWnluc0IwUjNqWElxaU41WWZrR2V4ZWt1d1NqM01lWllLa2IxRWlnV08xMGtGTXlOK2k0M3ZFWW54dDZ1NDloUWdObERrOW5tV0lTWjl3M3piNFNkM2wyZ2hoVFZFd2ZHYldTYlVCellXRjEvRnlTQWEiLCJtYWMiOiI5YjU1YTBiZDJkZDIzMTY5MjBlODlmZmYyYWE4ZWZjODU0MDdiMzdmYjZkM2VmNzYwZDY2NDE4YjkxYTZlMjg0IiwidGFnIjoiIn0%3D<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>host<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"18 characters\">kc.advancesols.com<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>referer<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"31 characters\">http:\/\/kc.advancesols.com\/login<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>upgrade-insecure-requests<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str>1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>user-agent<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"115 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/102.0.5005.63 Safari\/537.36<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1181694520\", {\"maxDepth\":0})<\/script>\n","request_server":"<pre class=sf-dump id=sf-dump-1169989836 data-indent-pad=\"  \"><span class=sf-dump-note>array:46<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>CONTEXT_DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"33 characters\">\/home\/advances\/KC.advancesols.com<\/span>\"\n  \"<span class=sf-dump-key>CONTEXT_PREFIX<\/span>\" => \"\"\n  \"<span class=sf-dump-key>DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"33 characters\">\/home\/advances\/KC.advancesols.com<\/span>\"\n  \"<span class=sf-dump-key>GATEWAY_INTERFACE<\/span>\" => \"<span class=sf-dump-str title=\"7 characters\">CGI\/1.1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT<\/span>\" => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\/span>\" => \"<span class=sf-dump-str title=\"13 characters\">gzip, deflate<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">en-US,en;q=0.9<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CACHE_CONTROL<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">max-age=0<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CONNECTION<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  \"<span class=sf-dump-key>HTTP_COOKIE<\/span>\" => \"<span class=sf-dump-str title=\"713 characters\">XSRF-TOKEN=eyJpdiI6ImcwbFdoNzNKVkNmaVZ5SVJmVHZFNnc9PSIsInZhbHVlIjoiY3QraDRwc1M3WTdaQWxHSzJ5c2lKaHc3dlV2UU0wWnphN1Z6My9wOCsrSFFQZlRJbDBCVHdkSFIvK3JUMnhYaEJieXZ3aWFKMVFMWGtwdUxTRjVIMFlVWFdPcTNLS29HZFhyNVVxbkhFMCs5bk9YN0kvTk5aejRaUExqZG9DY1giLCJtYWMiOiI0YzdkOGUyMTY1YjI1NjFiMmVjZjhmZDhlYTMwZTI4ZWU2Yzg4OTI2ZWU1ZjRhYTNkYWViMmRiM2QxZjY2YmZhIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImNYOEJCVUhIY1JSeG9HWVZrSXVCWEE9PSIsInZhbHVlIjoiYTN0L3lOSmpLZjcrNHRsWnluc0IwUjNqWElxaU41WWZrR2V4ZWt1d1NqM01lWllLa2IxRWlnV08xMGtGTXlOK2k0M3ZFWW54dDZ1NDloUWdObERrOW5tV0lTWjl3M3piNFNkM2wyZ2hoVFZFd2ZHYldTYlVCellXRjEvRnlTQWEiLCJtYWMiOiI5YjU1YTBiZDJkZDIzMTY5MjBlODlmZmYyYWE4ZWZjODU0MDdiMzdmYjZkM2VmNzYwZDY2NDE4YjkxYTZlMjg0IiwidGFnIjoiIn0%3D<\/span>\"\n  \"<span class=sf-dump-key>HTTP_HOST<\/span>\" => \"<span class=sf-dump-str title=\"18 characters\">kc.advancesols.com<\/span>\"\n  \"<span class=sf-dump-key>HTTP_REFERER<\/span>\" => \"<span class=sf-dump-str title=\"31 characters\">http:\/\/kc.advancesols.com\/login<\/span>\"\n  \"<span class=sf-dump-key>HTTP_UPGRADE_INSECURE_REQUESTS<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_USER_AGENT<\/span>\" => \"<span class=sf-dump-str title=\"115 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/102.0.5005.63 Safari\/537.36<\/span>\"\n  \"<span class=sf-dump-key>PATH<\/span>\" => \"<span class=sf-dump-str title=\"13 characters\">\/bin:\/usr\/bin<\/span>\"\n  \"<span class=sf-dump-key>QUERY_STRING<\/span>\" => \"\"\n  \"<span class=sf-dump-key>REDIRECT_REDIRECT_SCRIPT_URI<\/span>\" => \"<span class=sf-dump-str title=\"31 characters\">http:\/\/kc.advancesols.com\/admin<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_REDIRECT_SCRIPT_URL<\/span>\" => \"<span class=sf-dump-str title=\"6 characters\">\/admin<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_REDIRECT_STATUS<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">200<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_REDIRECT_UNIQUE_ID<\/span>\" => \"<span class=sf-dump-str title=\"27 characters\">YqRpvEWmEE3CUqifs0vG_QAAAAY<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_SCRIPT_URI<\/span>\" => \"<span class=sf-dump-str title=\"31 characters\">http:\/\/kc.advancesols.com\/admin<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_SCRIPT_URL<\/span>\" => \"<span class=sf-dump-str title=\"6 characters\">\/admin<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_STATUS<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">200<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_UNIQUE_ID<\/span>\" => \"<span class=sf-dump-str title=\"27 characters\">YqRpvEWmEE3CUqifs0vG_QAAAAY<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_URL<\/span>\" => \"<span class=sf-dump-str title=\"13 characters\">\/public\/admin<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"13 characters\">39.41.117.175<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_PORT<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">62507<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_METHOD<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">GET<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_SCHEME<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">http<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_URI<\/span>\" => \"<span class=sf-dump-str title=\"6 characters\">\/admin<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_FILENAME<\/span>\" => \"<span class=sf-dump-str title=\"50 characters\">\/home\/advances\/KC.advancesols.com\/public\/index.php<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_NAME<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">\/public\/index.php<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_URI<\/span>\" => \"<span class=sf-dump-str title=\"31 characters\">http:\/\/kc.advancesols.com\/admin<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_URL<\/span>\" => \"<span class=sf-dump-str title=\"6 characters\">\/admin<\/span>\"\n  \"<span class=sf-dump-key>SERVER_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">139.162.12.196<\/span>\"\n  \"<span class=sf-dump-key>SERVER_ADMIN<\/span>\" => \"<span class=sf-dump-str title=\"28 characters\">webmaster@kc.advancesols.com<\/span>\"\n  \"<span class=sf-dump-key>SERVER_NAME<\/span>\" => \"<span class=sf-dump-str title=\"18 characters\">kc.advancesols.com<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PORT<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">80<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PROTOCOL<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">HTTP\/1.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_SIGNATURE<\/span>\" => \"\"\n  \"<span class=sf-dump-key>SERVER_SOFTWARE<\/span>\" => \"<span class=sf-dump-str title=\"6 characters\">Apache<\/span>\"\n  \"<span class=sf-dump-key>TZ<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">Asia\/Singapore<\/span>\"\n  \"<span class=sf-dump-key>UNIQUE_ID<\/span>\" => \"<span class=sf-dump-str title=\"27 characters\">YqRpvEWmEE3CUqifs0vG_QAAAAY<\/span>\"\n  \"<span class=sf-dump-key>PHP_SELF<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">\/public\/index.php<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\/span>\" => <span class=sf-dump-num>1654942140.3725<\/span>\n  \"<span class=sf-dump-key>REQUEST_TIME<\/span>\" => <span class=sf-dump-num>1654942140<\/span>\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1169989836\", {\"maxDepth\":0})<\/script>\n","request_cookies":"<pre class=sf-dump id=sf-dump-1965622499 data-indent-pad=\"  \"><span class=sf-dump-note>array:2<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>XSRF-TOKEN<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">6UUcxeZXtZ33vFXIbWR37kJXw0qq6l9inYC6RqZB<\/span>\"\n  \"<span class=sf-dump-key>laravel_session<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">3kEvlBFAugsUk3BF5ZiTuiOvYzni5DLNzr1l8U6E<\/span>\"\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1965622499\", {\"maxDepth\":0})<\/script>\n","response_headers":"<pre class=sf-dump id=sf-dump-2053014902 data-indent-pad=\"  \"><span class=sf-dump-note>array:5<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>content-type<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"24 characters\">text\/html; charset=UTF-8<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">no-cache, private<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>date<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Sat, 11 Jun 2022 10:09:00 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>set-cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"428 characters\">XSRF-TOKEN=eyJpdiI6IkNGbllhRWQvbW1GK1VWZ3NhbldiQVE9PSIsInZhbHVlIjoicE4zZmpTbWx1elBBSW1sVy9pVm9KTVlYaXZhS0QyRFBQRnN6QUpOVy9UZzJtUkYvZ2FNS3Y2QTRRRHRNcjc2ZStmYjhrdmRrV0Z6RXhRcmpVeTdBanFrMlFlS1YwdUpCbmp2RS93U0d4RHRrOG9PQVV6SUJhbktzdE9iNGZ6M20iLCJtYWMiOiJhZTNjOWJlM2FlNWExMzcyYmNkM2YxOWZlZDMxMDVhZTZjNmE0NGY4YTFmZDQwODVkNzhlYmY2MDM5NTg4NTJhIiwidGFnIjoiIn0%3D; expires=Sat, 11-Jun-2022 12:09:00 GMT; Max-Age=7200; path=\/; samesite=lax<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"443 characters\">laravel_session=eyJpdiI6InowK0R2VzJjUUdISGthVThvUUJ2NFE9PSIsInZhbHVlIjoiRzRJbGd3WkJmOFYxNjE1Y0hPcmREdUJMbW44MjRSUEpKNFZSSWJ0bTBLWFJxTlZFSFBncWN2ZjNiR3FkRGlLejFRTXR4MXlhcXFSZ3VIR3dmUjJmRmpWVTJaRmtGVzA4R1RzMjFUT2E2UmVKMFplS3p6bHlpQ2d4TDMxRHJkckciLCJtYWMiOiJiOWVhYmVmMTE2ODQwNzI5Y2EzY2Q4ZDVkYmU2MmVkMjMxYmY3MDU3OTNjNDE4ZGVkMWVlODY2ZTk0YTlmZjExIiwidGFnIjoiIn0%3D; expires=Sat, 11-Jun-2022 12:09:00 GMT; Max-Age=7200; path=\/; httponly; samesite=lax<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>Set-Cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"400 characters\">XSRF-TOKEN=eyJpdiI6IkNGbllhRWQvbW1GK1VWZ3NhbldiQVE9PSIsInZhbHVlIjoicE4zZmpTbWx1elBBSW1sVy9pVm9KTVlYaXZhS0QyRFBQRnN6QUpOVy9UZzJtUkYvZ2FNS3Y2QTRRRHRNcjc2ZStmYjhrdmRrV0Z6RXhRcmpVeTdBanFrMlFlS1YwdUpCbmp2RS93U0d4RHRrOG9PQVV6SUJhbktzdE9iNGZ6M20iLCJtYWMiOiJhZTNjOWJlM2FlNWExMzcyYmNkM2YxOWZlZDMxMDVhZTZjNmE0NGY4YTFmZDQwODVkNzhlYmY2MDM5NTg4NTJhIiwidGFnIjoiIn0%3D; expires=Sat, 11-Jun-2022 12:09:00 GMT; path=\/<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"415 characters\">laravel_session=eyJpdiI6InowK0R2VzJjUUdISGthVThvUUJ2NFE9PSIsInZhbHVlIjoiRzRJbGd3WkJmOFYxNjE1Y0hPcmREdUJMbW44MjRSUEpKNFZSSWJ0bTBLWFJxTlZFSFBncWN2ZjNiR3FkRGlLejFRTXR4MXlhcXFSZ3VIR3dmUjJmRmpWVTJaRmtGVzA4R1RzMjFUT2E2UmVKMFplS3p6bHlpQ2d4TDMxRHJkckciLCJtYWMiOiJiOWVhYmVmMTE2ODQwNzI5Y2EzY2Q4ZDVkYmU2MmVkMjMxYmY3MDU3OTNjNDE4ZGVkMWVlODY2ZTk0YTlmZjExIiwidGFnIjoiIn0%3D; expires=Sat, 11-Jun-2022 12:09:00 GMT; path=\/; httponly<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-2053014902\", {\"maxDepth\":0})<\/script>\n","session_attributes":"<pre class=sf-dump id=sf-dump-113942941 data-indent-pad=\"  \"><span class=sf-dump-note>array:6<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>_token<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">6UUcxeZXtZ33vFXIbWR37kJXw0qq6l9inYC6RqZB<\/span>\"\n  \"<span class=sf-dump-key>_previous<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>url<\/span>\" => \"<span class=sf-dump-str title=\"31 characters\">http:\/\/kc.advancesols.com\/admin<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>_flash<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>old<\/span>\" => []\n    \"<span class=sf-dump-key>new<\/span>\" => []\n  <\/samp>]\n  \"<span class=sf-dump-key>login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d<\/span>\" => <span class=sf-dump-num>1<\/span>\n  \"<span class=sf-dump-key>auth<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>password_confirmed_at<\/span>\" => <span class=sf-dump-num>1654942139<\/span>\n  <\/samp>]\n  \"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\/span>\" => []\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-113942941\", {\"maxDepth\":0})<\/script>\n"}}, "Xca6e316a238724fd178cbb419709f15f");

</script>
<!-- toastr js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
</body>
</html>
