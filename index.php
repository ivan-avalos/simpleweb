<!--Simple CSS-less JS-less website
    Copyright (C) 2018  Iván Alejandro Ávalos Díaz <ivan.avalos.diaz@hotmail.com>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.-->

<html>
<head>
  <title>Simple website</title>
</head>
<body>
  <h1>Simple CSS-less JS-less website</h1>
  <h2>Why this website has no stylesheet?</h2>
  <p>This website has no design, but if you look closer, you'll find this
  website beautiful and then, you will be able to appreciate the real
  art. That's the point of this website: it doesn't need a design to look
  beautiful.</p>
  <p>The point of this website is <h1>*usability*</h1>.</p>
  <hr>
  <h2>Useless currency converter</h2>
  <form method="get" action="https://www.xe.com/currencyconverter/convert">
    <label for="amount">From:</label>
    <input type="number" name="Amount" min="0.01" step="0.01" max="2500" />
    <input type="text" name="From" min="3" max="3" placeholder="USD" /><br>

    <label for="To">To:</label>
    <input type="text" name="To" min="3" max="3" placeholder="MXN" />
    <input type="submit" value="Convert" />
  </form>
  <hr>
  <h2>Useless base converter</h2>
  <form method="get" action="index.php">
    <label for="value">From:</label>
    <input type="text" name="value" />
    <input type="number" name="from" placeholder="10" /><br>

    <label for="to">To:</label>
    <input type="number" name="to" placeholder="2" />
    <input type="submit" value="Convert" />
  </form>
  <p>Result: <?php if(isset($_GET['value']) && isset($_GET['from']) &&
  isset($_GET['to'])) echo base_convert($_GET['value'], $_GET['from'],
  $_GET['to']); ?> </p>
  <hr>
  <h2>Useless QR Code generator</h2>
  <form method="get" action="index.php">
    <label for="type">Type:</label>
    <select name="type">
      <option value="text" selected>text</option>
      <option value="url">url</option>
      <option value="email">email</option>
      <option value="tel">tel</option>
      <option value="vcard">vcard</option>
    </select>
    <label for="size">Size (1-15):</label>
    <input type="number" name="size" minvalue="1" maxvalue="15" value="5"/><br>
    
    <label for="data">Data:</label>
    <textarea name="data" ></textarea>
    <input type="submit" value="Generate QR Code"/>
  </form>
  <img src="<?php if(isset($_GET['type']) && isset($_GET['size']) &&
  isset($_GET['data'])) echo
  'https://qrcode.online/img/?'.'type='.$_GET['type'].'&size='.$_GET['size'].'&data='.urlencode($_GET['data']);
  ?>" />
  <hr>
  <h2>Useless StackOverFlow search</h2>
  <form method="get" action="https://stackoverflow.com/search">
    <label for="q">Query:</label>
    <input type="search" name="q" />
    <input type="submit" />
  </form>
  <hr>
  <h2>Useless links</h2>
  <a href="https://duckduckgo.com">DuckDuckGo Search Engine</a><br>
  <a href="https://gnu.org">GNU Operating System</a><br>
  <a href="https://fsf.org">Free Software Foundation</a><br>
  <a href="https://github.com">Github</a><br>
  <a href="index.php">Here</a><br>
  <a href="https://stackoverflow.com">StackOverFlow</a><br>
  <hr><hr>
  <h2>Useless sotfware:</h2>
  <ul>
    <li><a href="https://opensuse.org">OpenSUSE</a></li>
    <li><a href="https://httpd.apache.org">Apache HTTP Server</a></li>
    <li><a href="https://emacs.org">GNU Emacs</a></li>
  </ul>
</body>
</html>
