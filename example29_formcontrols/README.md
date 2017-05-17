# 什麼是 jQuery Mobile？

以往的網頁應用程式介面，其實大部分都不太適合行動裝置使用，畫面不是過大，就是因為內容過多而導致載入速度不佳，甚至是瀏覽方式不適合行動式裝置導致顯示錯亂，因此，jQuery 就推出一套新的函式庫：jQuery Mobile。

簡單的說，jQuery Mobile 希望能夠統一市面上常見行動裝置的使用者介面系統。它是一個有彈性且易主題化的一個輕量級函式庫，希望讓各種行動裝置的瀏覽器都能夠支援，就如同對於桌上型的瀏覽器一般，並且在使用網頁時，能夠以接近一般原生應用程式的經驗來操作。
jQuery Mobile 具備以下幾個特色：

1.以 jQuery 為核心

2.輕量化檔案

3.Html5 Markup-driven

4.自動切換排版

5.支援滑鼠與觸碰事件

6.WAI-ARIA

7.強大的佈景主題系統

8.ASP.NET MVC 的支援

9.支援市面上大部分行動裝置

10.畫面的一致化

11.多樣化的 UI

# 一個 jQuery Mobile 的結構通常會預先載入兩個 javascript 一個 CSS

<link rel="stylesheet" href="jquery.mobile.min.css">

<script src="jquery.min.js"></script>

<script src="jquery.mobile.min.js"></script>

# 預載的 js 都會放在 HTML 的 header 裡頭，而 body 裏面會是由一個個的 page 組成 ( 想像一下手機一頁一頁切換 )，

# 每個 page 內通常會有 header、footer 和 ui-content 這三個 div 區塊，而內容通常也都會放在 ui-content 這個 div 區塊裡頭。

<head>

  <title>jQuery Mobile</title>
  
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile.min.css">
  
  <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
  
  <script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile.min.js"></script>
  
</head>

<body>

  <div data-role="page">  // page
  
    <div data-role="header">  // header
    
      <h1>header</h1>
      
    </div>
    
    <div class="ui-content">  // ui-content
    
      <p>content</p>
      
    </div>
    
    <div data-role="footer">  // footer
    
      <h4>footer</h4>
      
    </div>
    
  </div>
  
</body>

# 一個 jQuery Mobile 通常會有多個 page，不過就算有很多個 page，一次也只會顯示其中一頁，而 page 是使用 id 進行區隔。( id 不能重複 )

<div id="page1" data-role="page">

  <div role="main" class="ui-content"></div>
  
</div>

<div id="page2" data-role="page">

  <div role="main" class="ui-content"></div>
  
</div>

<div id="page3" data-role="page">

  <div role="main" class="ui-content"></div>
  
</div>

# page 之間的切換，可以利用 href，直接切換到指定的 page Id，並利用 使用 data-transition 設定切換效果，或設定 data-rel="back" 用同樣效果返回。

page 具有以下幾種切換效果：
default：預設值 ( fade )

fade：淡入淡出 ( 預設值 )

flip：翻轉

flow ：流動切換效果

pop：彈出窗口顯示

slide：左右滑動切換

slidefade：左右滑動 + 淡入淡出切換

slideup：由上而下滑動切換

slidedown：由下而上滑動切換

turn：轉向下一頁

none：直接切換

# button 有兩種，分別是用 a 來產生，或直接用 button 來創造，但不論用哪種方式，都必須加上 class="ui-btn"。

<a href="#" class="ui-btn">Anchor</a>

<button class="ui-btn">Button</button>

讓按鈕水平排列：

<a href="#" class="ui-btn ui-btn-inline">Anchor</a>

<button class="ui-btn ui-btn-inline">Button</button>

使用 class 產生按鈕 icon： 

<button class="ui-btn ui-btn-icon-left ui-icon-action">action</button>

<button class="ui-btn ui-btn-icon-left ui-icon-alert">alert</button>

<button class="ui-btn ui-btn-icon-up ui-icon-arrow-d">arrow-d</button>

<button class="ui-btn ui-btn-icon-right ui-icon-arrow-d-l">arrow-d-l</button>

<button class="ui-btn ui-btn-icon-bottom ui-icon-arrow-d-r">arrow-d-r</button>

<button class="ui-btn ui-btn-icon-left ui-icon-arrow-l">arrow-l</button>

# 文字輸入欄位，藉由不同的 type，可以定義不同的輸入欄位，例如純文字、密碼或搜尋...等

<div class="ui-field-contain">

  <label for="#text_id">Title</label>
  
<input type="text" name="" id="#text_id">

</div>

<div class="ui-field-contain">

  <label for="#textarea_id">Title</label>
  
  <textarea name="" id="#textarea_id"></textarea>
  
</div>

<div class="ui-field-contain">

  <label for="#search_id">Title</label>
  
  <input type="search" name="" id="#search_id">
  
</div>

# header與footer是在App畫面設計中很常見的元素，而在 jQuery Mobile 裡頭是使用『data attribute』來進行定義

# 而位置是否固定，則是使用『data-position』來定義。

<div data-role="header" data-position="fixed">

  <h1>header</h1>
  
</div>

<div data-role="footer" data-position="fixed">

  <h4>footer</h4>
  
</div>

# 導航列選單,基本上一列只會有五個欄位，畢竟是在手機裝置上操作，超過五個欄位手指就會不方便點擊，
# 所以最多一列五個欄位，若超過，則會變成一列兩個欄位依序排列下去。

<div data-role="navbar">

  <ul>
  
    <li><a href="#">One</a></li>
    
    <li><a href="#">Two</a></li>
    
  </ul>
  
</div>

# radio-button 『單選』的按鈕，在 jQuery Mobile 裡頭，若為垂直排列 ( data-type="vertical" )，則會是圓形可點選，

# 若是水平排列 ( data-type="horizontal" )，則是矩形按鈕的樣式，

# 如果遇到變成複選的情況，可以檢查看看 name 是否重複，重複就會變成可複選的情形。


<form>

  <fieldset data-role="controlgroup" data-type="horizontal">
  
    <legend>Horizontal:</legend>
    
    <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2a" value="on" checked="checked">
    
    <label for="radio-choice-h-2a">One</label>
    
    <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2b" value="off">
    
    <label for="radio-choice-h-2b">Two</label>
    
    <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2c" value="other">
    
    <label for="radio-choice-h-2c">Three</label>
    
  </fieldset>
</form>

# checkbox 『複選』的按鈕，，在 jQuery Mobile 裡頭，若為垂直排列 ( data-type="vertical" )，則會是小正方形可勾選

# 若是水平排列 ( data-type="horizontal" )，則是矩形按鈕的樣式。

<form>
  <fieldset data-role="controlgroup">
  
    <legend>Vertical:</legend>
    
    <input type="checkbox" name="checkbox-v-2a" id="checkbox-v-2a">
    
    <label for="checkbox-v-2a">One</label>
    
    <input type="checkbox" name="checkbox-v-2b" id="checkbox-v-2b">
    
    <label for="checkbox-v-2b">Two</label>
    
    <input type="checkbox" name="checkbox-v-2c" id="checkbox-v-2c">
    
    <label for="checkbox-v-2c">Three</label>
    
  </fieldset>
  
</form>

# flip-switch 按鈕的開關，如果直接看程式碼，可以發現他其實就是一個 select 的概念

<form>

  <label for="flip-2">Flip toggle switch:</label>
  
  <select name="flip-2" id="flip-2" data-role="flipswitch" data-theme="b">
  
    <option value="off">Off</option>
    
    <option value="on">On</option>
    
  </select>
  
</form>

# list-view  清單，也就是 HTML 裡的 ul 和 li，若 li 設定為『 data-role="list-divider" 』，該 li 就會變成類似標題的分隔符號

# 除此之外，清單也可以使用 filter 的功能 ( data-filter="true" )，在最上方加入一個類似搜尋的欄位。


<ul data-role="listview" data-inset="true" data-divider-theme="a" data-filter="true">

  <li data-role="list-divider">Mail</li>
  
  <li>
    <a href="#">Inbox</a>
  </li>
  
  <li>
  
    <a href="#">Outbox</a>
    
  </li>
  
  <li data-role="list-divider">Contacts</li>
  
  <li>
  
    <a href="#">Friends</a>
  </li>
  
  <li>
  
    <a href="#">Work</a>
    
  </li>
  
</ul>

# table 表格，有別於一般的表格，jQuery Mobile 還設計了一個按鈕讓我們點選快速瀏覽欄位
# 設定 data-mode="columntoggle" 就會出現。

<table data-role="table" id="table-column-toggle" data-mode="columntoggle" class="ui-responsive table-stroke">

  <thead>
  
    內容省略
    
  </thead>
  
  <tbody>
  
    內容省略
    
  </tbody>
  
</table>

