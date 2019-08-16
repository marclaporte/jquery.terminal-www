<?php // -*- mode: web -*-
header("X-Powered-By: ");
require('utils.php');
$version = version();
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title>JQuery Terminal Emulator Plugin - Api Reference</title>
    <link rel="canonical" href="https://terminal.jcubic.pl/api_reference.php"/>
    <meta name="author" content="Jakub T. Jankiewicz - jcubic&#64;onet.pl"/>
    <meta name="Description" content="API refernce for JQuery Terminal Emulator - list of all methods and options."/>
    <meta name="keywords" content="jquery,terminal,interpreter,console,bash,history,authentication,ajax,server,client"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="alternate" type="application/rss+xml" title="Notification RSS" href="https://terminal.jcubic.pl/notification.rss"/>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans+Mono" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/style.css?<?= md5(file_get_contents('css/style.css')) ?>"/>
    <link href="css/jquery-ui-1.8.7.custom.css" rel="stylesheet"/>
    <link href="css/jquery.terminal.min.css?<?= md5(file_get_contents('css/jquery.terminal.min.css')) ?>" rel="stylesheet"/>
    <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
    <script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="js/jquery-ui-1.8.7.custom.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
    <script src="https://unpkg.com/js-polyfills/keyboard.js"></script>
    <script src="js/jquery.mousewheel-min.js"></script>
    <script src="js/jquery.terminal.min.js"></script>
    <script src="js/dterm.js?<?= md5(file_get_contents('js/dterm.js')) ?>"></script>
    <script src="js/code.js"></script>
    <script src="https://unpkg.com/randomcolor/randomColor.js"></script>
    <script src="js/chat.js?<?= md5(file_get_contents('js/chat.js')) ?>"></script>
    <script src="js/sysend.js?<?= md5(file_get_contents('js/sysend.js')) ?>"></script>
    <script src="js/favico.min.js"></script>
    <script>if (window.module) module = window.module;</script>

    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="API Reference for JQuery Terminal Emulator Plugin"/>
    <meta property="og:description" content="jQuery plugin for Command Line applications. Automatic JSON-RPC, custom object or a function. History, Authentication, Bash Shortcuts. Tab completion."/>
    <meta property="og:url" content="https://terminal.jubic.pl/api_reference.php"/>
    <meta property="og:site_name" content="JQuery Terminal Emulator Plugin"/>
    <meta property="og:image" content="https://terminal.jcubic.pl/signature.png"/>

    <meta name="twitter:image" content="https://terminal.jcubic.pl/signature.png"/>
    <meta name="twitter:image:alt" content="Main ASCII Art for jQuery Terminal"/>
    <meta name="twitter:title" content="API Reference for JQuery Terminal Emulator Plugin"/>
    <meta name="twitter:description" content="jQuery plugin for Command Line applications. Automatic JSON-RPC, custom object or a function. History, Authentication, Bash Shortcuts. Tab completion."/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@jcubic"/>
    <meta name="twitter:creator" content="@jcubic"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <header id="main" role="presentation" aria-hidden="true"><h1>JQuery Terminal Emulator Plugin</h1>
      <a href="/"><pre id="sig">
<div class="big">
      __ _____                     ________                              __
     / // _  /__ __ _____ ___ __ _/__  ___/__ ___ ______ __ __  __ ___  / /
 __ / // // // // // _  // _// // / / // _  // _//     // //  \/ // _ \/ /
/  / // // // // // ___// / / // / / // ___// / / / / // // /\  // // / /__
\___//____ \\___//____//_/ _\_  / /_//____//_/ /_/ /_//_//_/ /_/ \__\_\___/
          \/              /____/                                     <?=$version?>
</div>
<div class="medium">
      __ ____ ________                              __
     / // _  /__  ___/__ ___ ______ __ __  __ ___  / /
 __ / // // /  / // _  // _//     // //  \/ // _ \/ /
/  / // // /  / // ___// / / / / // // /\  // // / /__
\___//____ \ /_//____//_/ /_/ /_//_//_/ /_/ \__\_\___/
          \/                                  <?=$version?>
</div>
<div class="small">
      __ ____ ________
     / // _  /__  ___/__ ___ ______
 __ / // // /  / // _  // _//     /
/  / // // /  / // ___// / / / / /
\___//____ \ /_//____//_/ /_/ /_/
          \/              <?=$version?>
</div>
</pre><img src="signature.png"/><!-- for FB bigger then gihub ribbon --></a>
<pre class="separator">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</pre>
    </header>
    <nav>
      <ul>
        <li><a href="/#demo">Demo</a></li>
        <li><a href="https://github.com/jcubic/jquery.terminal/wiki/Getting-Started">Getting Started</a></li>
        <li><a href="api_reference.php">API Reference</a></li>
        <li><a href="examples.php">Examples</a></li>
        <li><a href="/#download">Download</a></li>
        <li><a href="/#comments">Comments</a></li>
        <li><a class="chat" href="#chat">Chat</a></li>
      </ul>
    </nav>
    <a class="github-ribbon" href="https://github.com/jcubic/jquery.terminal" style="position: fixed; top: 0; left: 0; z-index:1000"><img style="border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png" alt="Fork JQuery Terminal Emulator on GitHub"></a>
    <section>
      <article>
        <header id="api"><h1>API Reference</h1></header>
        <ul>
          <li><a href="#interpreter">Interpreter</a></li>
          <li><a href="#options">Options</a></li>
          <li><a href="#terminal">Terminal Object</a></li>
          <li><a href="#instance_methods">Instance Methods</a></li>
          <li><a href="#terminal_utilites">Terminal Utilites</a></li>
          <li><a href="#cmd">Command Line</a></li>
          <li><a href="#additional">Additional terminal controls</a></li>
          <li><a href="#change_colors">Changing Colors</a></li>
          <li><a href="#translation">Translation</a></li>
          <li><a href="#errors">Error Handling</a></li>
          <li><a href="#style">Style</a></li>
          <li><a href="#formatter">Formatter object</a></li>
          <li><a href="#formatters">Formatters</a></li>
          <li><a href="#keyboard">Keyboard events</a></li>
          <li><a href="#authentication">Authentication</a></li>
          <li><a href="#security">Security</a></li>
          <li><a href="#3rd">Thrid party code and additional plugins &amp; utilities</a></li>
        </ul>
      </article>
      <article>
        <header id="ads" role="presentation" aria-hidden="true"><h2>Advertisement</h2></header>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- black wide -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-6153701670678834"
             data-ad-slot="5835458303"></ins>
        <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </article>
      <article id="interpreter">
        <header><h2>Interpreter</h2></header>
        <p>To create terminal you must pass interpreter function (as first argument) which will be called when you type enter. <strong>Function has two argumentss</strong> command that user type in terminal and terminal instance. Optionally you can pass string as first argument, in this case interpreter function will be created for you using passed string as <strong><abbr title="Uniform Resource Identifier">URI</abbr></strong> (path to file) of <strong>JSON-RPC</strong> service (it's ajax so must be on the same server or use <a href="https://en.wikipedia.org/wiki/Cross-origin_resource_sharing">CORS</a>).</p>
        <pre class="javascript">
$('#some_id').terminal(function(command) {
    if (command == 'test') {
        this.echo("you just typed 'test'");
    } else {
        this.echo('unknown command');
    }
}, { prompt: '>', name: 'test' });
        </pre>
        <p>You can pass object as first argument - the methods will be invoked by commands typed by a user. In those methods <strong>this</strong> will point to terminal object.</p>
        <pre class="javascript">
$('#some_id').terminal({
    echo: function(arg1) {
        this.echo(arg1);
    },
    rpc: 'some_file.php',
    calc: {
        add: function(a, b) {
            this.echo(a+b);
        },
        sub: function(a, b) {
            this.echo(a-b);
        }
    }
}, { prompt: '>', greeting: false });
        </pre>
        <p>This code will create two command <strong>echo</strong> that will print first argument and <strong>add</strong> that will add two integers.</p>
        <p>From version 0.8.0 you can also use array with strings, objects and functions. You can use multiple number of objects and strings and one function (that will be called last if no other commands found). If you have ignoreSystemDescribe function enabled you will be able to use only one string (JSON-RPC url). If you have <a href="#completion">completion</a> enabled then your commands will be that from objects and JSON-RPC that have <a href="#system.describe">system.describe</a></p>
        <pre class="javascript">
$('#some_id').terminal(["rpc.php", {
    "mysql": function() {
        this.push(function(command, term) {
            $.jrpc("rpc.php", 'mysql', [command], function(json) {
                term.echo(json.result);
            });
        }, {
            prompt: 'mysql> '
        );
    }
}], {
    prompt: '>',
    greeting: false
});
        </pre>
        <p>In previous example mysql will be exception, even that rpc have that method it will not call it but create new interpreter.</p>
        <p>Terminal will always process numbers if processArguments is set to true (by default).</p>
        <p>To have automatic json-rpc service the JSON-RPC endpoint should implement system.describe method, bby default it need to be json object with "procs" property that should be array of that should look like this (params array is optional):</p>
        <pre class="javascript">{
  "procs": [
    {"name": "foo", "params": ["a", "b"]},
    {"name": "bar", "params": ["a"]}
  ]
}</pre>
        <p>If your system.describe method can't return that object you can use <a href="#describe">describe options</a>, you can use `"result.procs"` and return normal JSON-RPC response with object that have procs property with the same array.</p>
      </article>
      <article id="options">
        <header><h2>Options</h2></header>
        <p>This is list of options (for second argument):</p>
        <ul>
          <li id="history"><strong>history [bool]</strong> &mdash; if false will not store your commands.</li>
          <li id="prompt"><strong>prompt [string|function]</strong> &mdash; default is &ldquo;&gt;&nbsp;&rdquo; you can set it to string or function with one parameter which is callback that must be called with string for your prompt (you can use ajax call to get prompt from the server). You can use the same formatting as in <a href="#echo">echo</a>.</li>
          <li id="name"><strong>name [string]</strong> &mdash; name is used if you want to distinguish two or more terminals on one page or on one server. (if name them differently they will have different history and authentication).</li>
          <li id="greetings"><strong>greetings [string|function(callback)]</strong> &mdash; default is set to JQuery Terminal Singnature. You can set it to string or function (like prompt) with callback argument which must be called with your string.</li>
          <li id="processarguments"><strong>processArguments [bool | function]</strong> &mdash; if set to true it will process arguments when using an object (replace regex with real regex object number with numbers and process escape characters in double quoted strings - like \x1b \033 will be Escape for ANSI codes) - default true. If you pass function you can parse command line by yourself - it have one argument with string without name of the function and you need to return an array.</li>
          <li id="outputlimit"><strong>outputLimit [number]</strong> &mdash; if non negative it will limit the printing lines on terminal. If set to 0 it will print only lines that fit on one page (it will not create scrollbar if it's enabled). Default -1 which disable the function.</li>
          <li id="linksnoreferer"><strong>linksNoReferer [bool]</strong> &mdash; if set to true it will add rel="noreferer" to all links crated by terminal (default false).</li>
          <li id="exit"><strong>exit [bool]</strong> &mdash; if this option is set to false it don't use CTRL+D to exit from terminal and don't include &ldquo;exit&rdquo; command, default is true.</li>
          <li id="clear"><strong>clear [bool]</strong> &mdash; if this option is set to false it don't include &ldquo;clear&rdquo; command, default is true.</li>
          <li id="login"><strong>login [function(user, password, callback)|string]</strong> &mdash; login can be function, string or boolean. Function must have 3 arguments login password and callback which must be called with token (if login and password match) or falsy value (if authentication fail). If interpreter is string with valid URI JSON-RPC service you can set login option to true (it will use login remote method) or name of RPC method. <strong>this</strong> in login function is terminal object.
            <pre class="javascript">
function(user, password, callback) {
    if (user == 'demo' && password == 'secret') {
        callback('AUTHENTICATION TOKEN');
    } else {
        callback(null);
    }
}</pre>
            But you need to know that everybody can look at your javascript source code so it's better to call server using AJAX here and call callback on response. If callback receive truthy value, you can get that value using <a href="#token">token method</a> so you can pass when calling the server (and server then can identify that token).
          </li>
          <li id="tabcompletion"><strike><strong>tabcompletion [bool]</strong> &mdash; enable tab completion when you pass object as first argument. Default is false (tabulation key default insert tabulation character).</strike> removed in version 0.8.0.</li>
          <li id="completion"><strong>completion [function (string, callback)|array|boolean]</strong> &mdash; function with a callback that need to be executed with list of commands for tab completion (you need to pass array of commands to callback function), from version 0.8.0 you can also use true (it will take completion from object or RPC, if it have <a href="#system.describe">system.describe</a>, as interpreter) or array if you know what your commands are and don't need to call ajax to get them. From version 1.0.0 it no longer have terminal as parameter, terminal is now in <code>this</code> context.</li>
          <li id="enabled"><strong>enabled [bool]</strong> &mdash; default is true, if you want disable terminal you can set it to false. This is usefull if you want to hide terminal and enable on some action (If Terminal is enabled it intercept keyboard).</li>
          <li id="checkarity"><strong>checkArity [bool]</strong> &mdash; if set to true (by default) it will check number of arguments in functions and in JSON-RPC if service return <a href="#system.describe">system.describe</a> (only 1.1 draft say that it must return it, new Spec 2.0 don't say anything about it, json-rpc used by examples return <a href="#system.describe">system.describe</a>).</li>
          <li id="memory"><strong>memory [bool]</strong> &mdash; if set to true it will not use localStorage nor Cookies and save everything in memory only, default false.</li>
          <li id="onInit"><strong>onInit [function(terminal)]</strong> &mdash; callback function called after initialization (if there is login function it will be called after authentication).</li>
          <li id="onRPCError"><strong>onRPCError [function(error)]</strong> &mdash; callback function that will be called instead of built in RPC error. (this in that function is terminal object).</li>
          <li id="onExit"><strong>onExit [function(terminal)]</strong> &mdash; callback function called when you logout.</li>
          <li id="onClear"><strong>onClear [function(terminal)]</strong> &mdash; callback function called when clear command is executed.</li>
          <li id="onBlur"><strong>onBlur [function(terminal)]</strong> &mdash; callback function called when terminal get out of focus. If you return false in this callback function the terminal will not get out of focus.</li>
          <li id="onResize"><strong>onResize [function(terminal)]</strong> &mdash; callback function called when terminal get resized.</li>
          <li id="onFocus"><strong>onFocus [function(terminal)]</strong> &mdash; callback function called when terminal get focus.</li>
          <li id="onTerminalChange"><strong>onTerminalChange [function(terminal)]</strong> &mdash; callback function called when you switch to next terminal.</li>
          <li id="onBeforeLogin"><strong>onBeforeLogin [function(terminal)]</strong> &mdash; callback function called called before login.</li>
          <li id="processRPCResponse"><strong>processRPCResponse [function(object)]</strong> &mdash; callback function that will be use with any result returned by JSON-RPC. So you can create better handler.</li>
          <li id="onCommandChange"><strong>onCommandChange [function(command, terminal)]</strong> &mdash; event fired when command line is changed.</li>
          <li id="exceptionHandler"><strong>exceptionHandler [function(exception)]</strong> &mdash; callback that will be executed instead of default print exception on terminal.</li>
          <li id="historyFilter"><strong>historyFilter [function(command)]</strong> &mdash; if you return false in this function command will not be added into history.</li>
          <li id="ignoreSystemDescribe"><strike><strong>ignoreSystemDescribe [boolean]</strong> &mdash; if used it will not call <a href="#system.describe">system.describe</a> metod for JSON-RPC (it was in version 1.1 of JSON-RPC which was a draft, but it's supported by JSON-RPC implementetion used in demos).</strike> in version 1.5 replaced with <a href="#describe">describe</a> option</li>
          <li id="historySize"><strong>historySize [number]</strong> &mdash; size of the history (default 60) if you pass falsy value it will be not restricted.</li>
          <li id="historyState"><strong>historyState [boolean]</strong> &mdash; if set to true terminal will record all commands in url hash.</li>
          <li id="keypress"><strong>keypress [function(event, terminal)]</strong> &mdash; function called on keypress event if you return false it will not execute default actions (keypress event is called when you type printable characters).</li>
          <li id="keydown"><strong>keydown [function(event, terminal)]</strong> &mdash; function called on keydown event if you return false it will not execute default actions (keydown event is use for the shortcuts).</li>
          <li id="convertLinks"><strong>convertLinks [boolean]</strong> &mdash; if set to true it will convert urls to a tags, it do that by default.</li>
          <li id="scrollOnEcho"><strong>scrollOnEcho [boolean]</strong> &mdash; indicate if terminals should scroll to bottom on echo or flush. If set to false it will scroll to bottom if terminal was at the bottom, it use <a href="#is_bottom"><code>is_bottom</code></a> method.</li>
          <li id="linksNoReferrer"><strong>linksNoReferrer [boolean]</strong> &mdash; if set to true it will set noreferrer on links, default set to false.</li>
          <li id="maskChar"><strong>maskChar [boolean|string]</strong> &mdash; default mask character by default it's `*' (if set to true), used when you use <a href="#set_mask"><code>set_mask(true)</code></a>.</li>
          <li id="wrap"><strong>wrap [boolean]</strong> &mdash; if set to false terminal will not wrap long lines (it can be overwritten by <a href="#echo">echo option</a>), default true</li>
          <li id="execHash"><strong>execHash [boolean]</strong> &mdash; if set to true it will execute commands from url hash, the hash need to have a form of JSON array that look like this <code>#[[0,1,"command"],[0,2,"command2"]]</code> first number is index of terminal on a page second is index of command for terminal. (0 is initial state of the terminal so first command have index of 1). Set to false by default. You can record commands you type by calling <a href="#history_state"><strong>history_state</strong></a> method.</li>
          <li id="onAfterCommand"><strong>onAfterCommand [function(command)]</strong> &mdash; callback function executed after the command.</li>
          <li id="onBeforeLogout"><strong>onBeforeLogout [function]</strong> &mdash; function executed before logout from main interpreter, if function return false terminal will not logout.</li>
          <li id="onAfterLogout"><strong>onAfterLogout [function]</strong> &mdash; function executed after logout from the terminal if there was a login.</li>
          <li id="onAjaxError"><strong>onAjaxError [function(xhr, status, error)]</strong> &mdash; function executed on JSON-RPC ajax error. (this in this function is terminal object).</li>
          <li id="onBeforeCommand"><strong>onBeforeCommand [function(command)]</strong> &mdash; function executed before command. If function return false the command will not be executed.</li>
          <li id="onCommandNotFound"><strong>onCommandNotFound [function(command, terminal)]</strong> &mdash; function executed if there are no command with that name, by default terminal display error message, it will not work if you use function as interpreter.</li>
          <li id="onPause"><strong>onPause [function]</strong> &mdash; function executed when you call pause() or return a promise from a command.</li>
          <li id="onResume"><strong>onResume [function]</strong> &mdash; function executed when you call resume() or when promise returned in command is resolved.</li>
          <li id="onPop"><strong>onPop [function]</strong> &mdash; function exectuted when each time pop is called, CTRL+D also call pop so the function is triggered, this method is also executed when you have login and you exit from main interpreter.</li>
          <li id="onPush"><strong>onPush [function]</strong> &mdash; function executed when you push new interpreter on the stack of interpreters.</li>
          <li id="scrollBottomOffset"><strong>scrollBottomOffset number</strong> &mdash; indicate offset from bottom in which terminal will consider at bottom of the terminal. Used in <a href="#is_bottom"><code>is_bottom</code></a> method.</li>
          <li id="importHistory"><strong>importHistory [boolean]</strong> &mdash; if the options is to true it will import history in <a href="#import_view">import_view</a> exported by <a href="#export_view">export_view</a>, default set to false.</li>
          <li id="request"><strong>request [function(jxhr, terminal, request)]</strong> &mdash; callback function called before senidng JSON-RPC request to the server (it's also called on <a href="#system.describe">system.describe</a>), you can modify request or jQuery XHR object, see <a href="examples.php#csrf">CSRF Example</a>. Added in version 1.0.0.</li>
          <li id="response"><strong>response [function(jxhr, terminal, response)]</strong> &mdash; callback function called after JSON-RPC response (it's also called on <a href="#system.describe">system.describe</a>), you can modify response before it's processed by jQuery Terminal, also you can call methods on jQuery XHR object. see <a href="examples.php#csrf">CSRF Example</a>. Added in version 1.0.0.</li>
          <li id="wordAutocomplete>"><strong>wordAutocomplete [boolean]</strong> &mdash; if set to false it will autocomplete whole command before cursor, default set to true to autocomplete only word.</li>
          <li id="extra"><strong>extra [object]</strong> &mdash; properties of this object are added to main interpreter (the same when you use push and add extra properties). Added in version 1.0 and fixed in 1.0.7.</li>
          <li id="terminal_keymap"><strong>keymap</strong> &mdash; object where keys are uppercase shortcuts like <strong>CTRL+ALT+C</strong> and value is function execute on that shortcut. The order of modifiers is <strong>CTRL, META, SHIFT, ALT</strong>. Added in version 1.0.0.</li>
          <li id="click_timeout"><strong>clickTimeout [number]</strong> &mdash; timeout to detect double click, if second click is faster then the timeout it is considered as double click. Default 200 milisecond.</li>
          <li id="echo_command"><strong>echoCommand [boolean]</strong> &mdash; if set to false terminal will not echo command you enter with prompt, default true.</li>
          <li id="num_chars_rows"><strong>numChars/numRows [number]</strong> &mdash; fixed number of rows and cols, created mainly for testing from node.</li>
          <li id="on_export_import"><strong>onExport/onImport [function]</strong> &mdash; callback functions executed when calling <a href="#export">export</a>/<a href="#import">import</a>. You can add properties additial state to be saved and restored. in export you need to return object whitch properies will be aaded to export object and in on import you get imported object as argument. It's used in leash to <a href="https://github.com/jcubic/leash/blob/e0e771f499de424dd037730b2dbddc4d6ef23699/leash-src.js#L2525">save/restore current working directory and directory listing for completion</a>.</li>
          <li id="pause_events"><strong>pauseEvents [boolean]</strong> &mdash; if set to false <a href="#keypress">keypress</a>, <a href="#keydown">keydown</a> and <a href="#terminal_keymap">keymap</a> will be executed when terminal is paused. Default set to true.</li>
          <li id="soft_pause"><strong>softPause [boolean]</strong> &mdash; if set to true it will not hide command line when paused, usefull if you want to have progress animation using propmt. Default false.</li>
          <li id="describe"><strong>describe [string|false]</strong> &mdash; It should be dot separated string that point to filed that have list of procedures, if you have normal JSON-RPC method you can use "result" or "result.procs". It can be empty string it that case response will be taken as array of procedures. If the value is set to false it will not call system.describe method, same as <a href="#ignoreSystemDescribe">ignoreSystemDescribe == true</a>.</li>
          <li id="doubleTab"><strong>doubleTab [function|boolean]</strong> &mdash; function executed when you press tab twice and there are more then one completion. The function have 3 arguments completing string, array of completions and echo_command function. If you pass false it will disable double tab.</li>
          <li id="anyLinks"><strong>anyLinks boolean</strong> &mdash; enable to enter links other then ftp or http(s) in echo (add in version 1.20.0 because of security, attacker could use javascript protocol - XSS) default false. See <a href="#security">security</a>.</li>
          <li id="invokeMethods"><strong>invokeMethods boolean</strong> &mdash; enable using terminal and cmd methods in extended commands of echo, default false because of security (attacher could invoke echo with raw option). See <a href="#security">security</a>.</li>
        </ul>
        <p id="system.describe">system.describe JSON-RPC method</p>
        <p>As per JSON-RPC 1.1 the method should return this json:</p>
        <pre class="javascript">{
  "sdversion": "1.0",
  "name": "DemoService",
  "address": "http:\/\/example.com\/rpc",
  "id":"urn:md5:4e39d82b5acc6b5cc1e7a41b091f6590",
  "procs" :[
    {"name":"echo","params":["string"]}
  ]
}</pre>
        <p>Before version 1.5 it require to have name == 'DemoService' added by mistake, fixed in 1.5. Before version 1.5 it also required to have name and id.</p>
        <p>In version >= 1.5 you can use option <a href="#describe">describe</a> to point to the different field instead of procs (you can use <code><strong>result.procs</strong></code> and standard JSON-RPC response).</p>
      </article>
      <article id="terminal">
        <header><h2>Terminal object</h2></header>
        <p>You will have access to terminal object in <strong>this</strong> object when you put object as first argument. In second argument if you put a function. That object is also returned by the plugin itself. The terminal is created only once so you can call that plugin multiple times. The terminal object is jQuery object extended by methods listed below.</p>
        <p>If you want to get instance of the terminal object when you already have terminal created you can call <code><strong>$('selector').terminal()</strong></code>.</p>
      </article>
      <article id="instance_methods">
        <header><h2>Instance Methods</h2></header>
        <p>This is list of available methods (you can also use jQuery methods):</p>
        <ul>
          <li id="clear"><strong>clear()</strong> &mdash; clear terminal.</li>
          <li id="pause_resume"><strong>pause([boolean])/resume()</strong> &mdash; if your command will take some time to compute (like in AJAX call) you can pause terminal (terminal will be disable and command line will be hidden) and resume it in AJAX response is called. (if you want proper timing when call exec on array of commands you need to use those functions). From version 0.11.1 pause accept optional boolean argument that indicate if command line should be visible (this can be used with animation).</li>
          <li id="paused"><strong>paused()</strong> &mdash; return true if terminal is paused.</li>
          <li id="echo"><strong>echo([string|function], [options])</strong> &mdash; display string on terminal &mdash; (additionally if you can call this function with a function as argument it will call that function and print the result, this function will be called every time you resize the terminal or browser).<br/>
            There are five options:
            <ul>
              <li><strong>raw</strong> &mdash; it will allow to display raw html,</li>
              <li><strong>finalize</strong> &mdash; which is callback function with one argument the div container,</li>
              <li><strong>flush</strong> &mdash; default is true, if it's false it will not print echo text to terminal until you call <strong><a href="#flush">flush</a></strong> method,</li>
              <li><strong>wrap</strong> &mdash; default is undefined, if set to true or false it will overwritten global option,</li>
              <li><strong>keepWords</strong> &mdash; it will not break text in the middle of the word (available from version 0.10.0).</li>
            </ul>
            You can also use basic text formatting using syntax as folow: <strong>[[!guib;&lt;COLOR&gt;;&lt;BACKGROUND&gt;]some text]</strong> will display <span style="color:#000;background-color:#00ee11;text-decoration:underline;font-style:italic;font-weight:bold">some text</span>:
            <ul>
              <li><strong>[[</strong> &mdash; open formatting.</li>
              <li><strong>u</strong> &mdash; underline.</li>
              <li><strong>s</strong> &mdash; strike.</li>
              <li><strong>o</strong> &mdash; overline.</li>
              <li><strong>i</strong> &mdash; italic.</li>
              <li><strong>b</strong> &mdash; bold.</li>
              <li><strong>g</strong> &mdash; glow (using css text-shadow).</li>
              <li><strong>!</strong> &mdash; it will create link instead of span, <strike>you need to turn off convertLinks option for this to work</strike>. from version 1.20.0 links other then ftp or http(s) was disabled by default and it enable it you need to use <strong><code>anyLinks: true</code></strong> option.</li>
              <li><strong>;</strong> &mdash; separator</li>
              <li><strong>color</strong> &mdash; color of text (hex, short hex or html/css name of the color).</li>
              <li><strong>;</strong> &mdash; separator.</li>
              <li><strong>color</strong> &mdash; background color (hex, short hex or html/css name of the color).</li>
              <li><strong>;</strong> &mdash; separator [optional].</li>
              <li><strong>class</strong> &mdash; class adeed to format span element [optional].</li>
              <li><strong>;</strong> &mdash; separator [optional].</li>
              <li><strong>text</strong> &mdash; text that will be used in data-text attribute or href if used with <strong>!</strong> this is added automatically by normalize called in split_equal.</li>
              <li><strong>]</strong> &mdash; end of format specification.</li>
              <li><strong>text</strong> &mdash; text that will be formated.</li>
              <li><strong>]</strong> &mdash; end of formatting.</li>
            </ul>
            <p>From version 1.3.0 (with fix in 1.10.0) you can use nested formatting like <code>[[;red;]foo [[;blue;]bar] baz]</code> (terminal is defining <code>$.terminal.nested_formatting</code> and adding it to <code>$.terminal.defaults.formatters</code>).</p>
            <p>From version 0.4.19 terminal support <a href="https://en.wikipedia.org/wiki/ANSI_escape_code">ANSI formatting</a> like \x1b[1;31mhello[0m will produce red color hello. Here is <a href="http://ascii-table.com/ansi-escape-sequences.php">shorter description of ansi escape codes</a>.</p>
            <p>From version 0.7.3 it also support Xterm 8bit (256) colors (you can test using this <a href="https://www.gnu.org/graphics/agnuheadterm-xterm.txt">GNU Head</a>) and formatting output from <strong>man</strong> command (overtyping).</p>
            <p>From version 0.8.0 it support html/css colors like blue, navy or red</p>
            <p>From version 0.9.0 Ansi escape code require <a href="js/unix_formatting.js">unix_formatting.js</a> file.</p>
            <p id="extended_commands">From version 0.9.0 you can execute commands using echo (you can return command to be executed from server) using same syntax as for formatting, if you echo: <code>[[command arg1 arg2...]]</code> it will execute that command.</p>
            <p>From version 1.15.0 you can execute any terminal or cmd method using systax <code>[[ terminal::method(arg1, arg2) ]]</code> or <code>[[ cmd::method(arg1, arg2) ]]</code>, in older version you'll need to create command that will invoke terminal method. You can use new in version 1.15.0 method <code>invoke_key</code> to execute shortcuts from server using <code>[[ terminal::invoke_key("CTRL+L") ]]</code>.</p>
            <p>If you want to create code that manipulate terminal formatting take a look at <a href="#formatter">$.terminal.formatter object</a>.</p>
            <p>From version 1.21.0 executing terminal and cmd methods was disabled by default (because of <a href="#security">security</a>) and to enable it you need to use <strong><code>invokeMethods: true</code></strong> option.</p>
          </li>
          <li id="error"><strong>error([string|function])</strong> &mdash; it display string in in red.</li>
          <li id="exception"><strong>exception(Error, [Label])</strong> &mdash; display exception with stack trace on terminal (second paramter is optional is used by terminal to show who throw the exception).</li>
          <li id="level"><strong>level()</strong> &mdash; return how deeply nested in interpreters you correctly in (It start from 1).</li>
          <li id="last_index"><strong>last_index()</strong> &mdash; return index of last line that can be use with <strong><a href="#update">update</a></strong> method after you echo something and you lost the reference using -1.</li>
          <li id="login"><strong>login([function(user, password, callback), boolean])</strong> &mdash; execute login function the same as login option but first argument need to be a function. The function will be called with 3 arguments, user, password and a function that need to be called with truthy value that will be stored as token. Each interpreter can have it's own login function (you will need call <strong><a href="#push">push</a></strong> function and then login. The token will be stored localy, you can get it passing true to token function. Second argument indicate if terminal should ask for login and password infinitely.</li>
          <li id="exec"><strong>exec([string, bool])</strong> &mdash; Execute command that like you where type it into terminal (it will execute user defined function). Second argument is optional if set to true, it will not display prompt and command that you execute. If you want to have proper timing of executed function when commands are asynchronous (use ajax) then you need to call pause and resume (make sure that you call <strong>pause</strong> before ajax call and <strong>resume</strong> as last in ajax response).</li>
          <li id="scroll"><strong>scroll([number])</strong> &mdash; you can use this method to scroll manually terminal (you can pass positive or negative value).</li>
          <li id="logout"><strong>logout()</strong> &mdash; if you use authentication it will logout from terminal. If you don't set login option this function will throw exception.</li>
          <li id="flush"><strong>flush()</strong> &mdash; if you echo using option <code>flush: false</code> (it will not display text immediately) then you can send that text to the terminal output using this function.</li>
          <li id="token"><strong>token([boolean])</strong> &mdash; return token which was set in authentication process or by calling login function. This is set to null if there is no login option. If you pass true as an argument you will have local token for the interpreter (created using <a href="#push">push</a> function) it will return null if that interpreter don't have token.</li>
          <li id="set_token"><strong>set_token([string, boolean])</strong> &mdash; update token.</li>
          <li id="get_token"><strong>get_token([boolean])</strong> &mdash; same as <a href="#token">token()</a>.</li>
          <li id="login_name"><strong>login_name()</strong> &mdash; return login name which was use in authentication. This is set to null if there is no login option.</li>
          <li id="set_prompt"><strong>set_prompt([string|function(callback)])</strong> &mdash; change the prompt.</li>
          <li id="next"><strong>next()</strong> &mdash; if you have more then one terminal instance it will switch to next terminal (in order of creation) and return reference to that terminal.</li>
          <li id="cols_rows"><strong>cols()/rows()</strong> &mdash; returns number of characters and number of lines of the terminal.</li>
          <li id="history"><strong>history()</strong> &mdash; return command line History object (need documentation - for now you can check the source code)</li>
          <li id="name"><strong>name()</strong> &mdash; return name of the interpreter.</li>
          <li id="push"><strong>push([string|function], {object})</strong> &mdash; push next interpreter on the stack and call that interpreter. First argument is new interpreter (<strong>the same</strong> as first argument to <strong>terminal</strong>). The second argument is a list of options as folow:
            <ul>
              <li><strong>name</strong> &mdash; to distinguish interpreters using command line history.</li>
              <li><strong>prompt</strong> &mdash; new prompt for this terminal.</li>
              <li><strong>onExit</strong> &mdash; callback function called on Exit.</li>
              <li><strong>onStart</strong> &mdash; callback function called on Start.</li>
              <li><strong>keydown</strong> &mdash; interpreter keydown event.</li>
              <li><strike><strong>historyFilter</strong> &mdash; the same as in terminal</strike> in next version.</li>
              <li><strong>completion</strong> &mdash; the same as in terminal.</li>
              <li><strong>login</strong> &mdash; same as <a href="#login">login</a> main option or calling login method after push.</li>
              <li><strong>keymap</strong> &mdash; same as <a href="#terminal_keymap">keymap in terminal</a>.</li>
              <li><strong>mousewheel</strong> &mdash; interpreter based mousewheel handler.</li>
              <li><strong>infiniteLogin</strong> &mdash; if set to true it will ask infinetly for username and password if login is set.</li>
            </ul>
            <p>Additionally everything that is passed within the object will be stored with interpreter on the stack &mdash; so it can be <strong>pop</strong> later. See also <a href="https://terminal.jcubic.pl/examples.php#multiple_interpreters">Multiple intepreters example</a>.</p>
          </li>
          <li id="pop"><strong>pop()</strong> &mdash; remove current interpreter from the stack and run previous one.</li>
          <li id="focus"><strong>focus([bool])</strong> &mdash; it will activate next terminal if argument is false or disable previous terminal and activate current one. If you have only one terminal instance it act the same as disable/enable.</li>
          <li id="enable_disable"><strong>enable()/disable()</strong> &mdash; as names says it enable or disable terminal.</li>
          <li id="destroy"><strong>destroy()</strong> &mdash; remove everything created by terminal. It will not touch local storage, if you want to remove it as weel use <a href="#purge">purge</a>.</li>
          <li id="purge"><strong>purge()</strong> &mdash; remove all local storage left by terminal. It will act like logout because it will remove login and token from local storage but you will not be logout until you refresh the page.</li>
          <li id="resize"><strong>resize([number, number]</strong> &mdash; change size of terminal if is called with two arguments (width,height) it will resize using this values. If is called without arguments it will act like refresh and use current size of element (you can use this if you set size in some other way).</li>
          <li id="signature"><strong>signature()</strong> &mdash; return JQuery Singature depending on size of terminal.</li>
          <li id="get_command"><strong>get_command()</strong> &mdash; return current command.</li>
          <li id="insert"><strong>insert(string)</strong> &mdash; insert text in cursor position.</li>
          <li id="export_view"><strong>export_view()</strong> &mdash; return object that can be use to restore the view using <a href="#import_view">import_view</a>.</li>
          <li id="import_view"><strong>import_view([view])</strong> &mdash; restore the view of the terminal using object returned prevoiusly by <a href="#export_view">export_view</a>.</li>
          <li id="set_prompt"><strong>set_prompt([string|function])</strong> &mdash; set prompt.</li>
          <li id="get_prompt"><strong>get_prompt()</strong> &mdash; return current prompt.</li>
          <li id="set_command"><strong>set_command(string)</strong> &mdash; set command using string.</li>
          <li id="set_mask"><strong>set_mask([bool|string])</strong> &mdash; toogle mask of command line if argument is true it will use maskChar as mask.</li>
          <li id="get_output"><strong>get_output([boolean])</strong> &mdash; return string contains whatever was print on terminal, if argument is set to true it will return raw lines data.</li>
          <li id="freeze_frozen"><strong>freeze([boolean])/frozen()</strong> &mdash; freeze: disable/enable terminal that can't be enabled by clicking on terminal, frozen check if terminal has been frozen by freeze command.</li>
          <li id="read"><strong>read([string, success_fn, cancel_fn])</strong> &mdash; wrapper over push, it set prompt to string and wait for text from user then call user function with entered string. The function also return a promise that can be used interchangeably with callback functions. from version 1.16.0 read disable history.</li>
          <li id="autologin"><strong>autologin([username, token])</strong> &mdash; autologin if you get username and token in other way, like in <a href="https://github.com/jcubic/sysend.js">sysend</a> event.</li>
          <li id="save_state"><strong>save_state([command, boolean])</strong> &mdash; it save current state of the terminal and update the hash. If second argument is true it will not update hash.</li>
          <li id="history_state"><strong>history_state([boolean])</strong> &mdash; disable or enable history sate save in hash. You can create commads that will start or stop the recording of commands, the commands itself will not be recorded.</li>
          <li id="clear_history_state"><strong>clear_history_state()</strong> &mdash; clear saved history state.</li>
          <li id="reset"><strong>reset()</strong> &mdash; reinitialize the terminal.</li>
          <li id="update"><strong>update(line, string)</strong> &mdash; update line with specified number with given string. The line number can be negative (-1 will change last line) the lines are indexed from 0.</li>
          <li id="prefix_name"><strong>prefix_name([boolean])</strong> &mdash; return name that is used for localStorage keys, if argument is true it will return name of local interpreter (added by <a href="#push">push()</a> method).</li>
          <li id="settings"><strong>settings()</strong> &mdash; return reference to settings object that can change options dynamicaly. Note that not all options can be change that way, like history based options.</li>
          <li id="set_interpreter"><strong>set_interpreter([interpreter, login])</strong> &mdash; overwrite current interpreter.</li>
          <li id="is_bottom"><strong>is_bottom()</strong> &mdash; return true if terminal scroll is at the bottom. It use <a href="#scrollBottomOffset">scrollBottomOffset</a> option to calculate how much from bottom it will consider at bottom.</li>
          <li id="scroll_to_bottom"><strong>scroll_to_bottom()</strong> &mdash; as the name suggest is scroll to the bottom of the terminal.</li>
          <li id="complete"><strong>complete([array, options])</strong> &mdash; automplete text based on array, usefull if custom autocomplete need to be implemended, see <a href="examples.php#autocomplete">autocomplete example</a>. There are two options word &mdash; to indicate of completion should be for whole command or only a word before cursor (default true) and echo that indicate if it should echo matched commands if more then one found (default false).</li>
          <li id="before_cursor"><strong>before_cursor([boolean])</strong> &mdash; get string before cursor if the only argument is true it will return word otherwise it will return whole text.</li>
          <li id="invoke_key"><strong>invoke_key([string])</strong> &mdash; invoke shortcut, <code>terminal.invoke_key('CTRL+L')</code> will clear terminal.</li>
          <li id="display_position"><strong>display_position([number], [boolean])</strong> &mdash; move virtual cursor to specied position or relative to curent position if second argument is true. Works only if you have formatter that change length.</li>
        </ul>
      </article>
      <article id="terminal_utilites">
        <header><h2>Terminal Utilites</h2></header>
        <p>Object <strong><abbr title="jQuery">$</abbr>.terminal</strong> contain bunch of utilities use by terminal, but they can also be used by user code.</p>
        <ul>
          <li id="split_equal"><strong>split_equal([string], [number])</strong> &mdash; return array. It split text into equal length lines and keep terminal formatting in place for displaying each line separately.</li>
          <li id="encode"><strong>encode([string])</strong> &mdash; encode &amp;, new line, space, tabs, &lt; and &gt; with entities.</li>
          <li id="format"><strong>format([string, object]</strong> &mdash; create html &lt;span&gt; elements from terminal formattings. Second argument are options with one option linksNoReferrer.</li>
          <li id="format_split"><strong>format_split([string])</strong> &mdash; return array of formatting and text between them.</li>
          <li id="escape_brackets"><strong>escape_brackets([string])</strong> &mdash; replace [ and ] with number entities.</li>
          <li id="escape_regex"><strong>escape_regex([string])</strong> &mdash; covert string that can be use in regex (RegExp constructor) literally.</li>
          <li id="have_formatting"><strong>have_formatting([string])</strong> &mdash; test if string have terminal formatting inside.</li>
          <li id="is_formatting"><strong>is_formatting([string])</strong> &mdash; test it string is full formatting (contain only one formatted text and nothing else).</li>
          <li id="strip"><strong>strip([string])</strong> &mdash; remove formatting from text.</li>
          <li id="active"><strong>active()</strong> &mdash; return selected terminal.</li>
          <li id="last_id"><strong>last_id()</strong> &mdash; return id of the last terminal. If you add 1 to that number it will be id of the next terminal.</li>
          <li id="ansi_colors"><strong>ansi_colors</strong> &mdash; object contain 4 objects normal, fainted, bold and pallete (8bit colors) that contains hex colors for ansi formatting (taken from linux terminal emulator), <strong>NOTE: from version 0.9.0 provided by <a href="js/unix_formatting.js">unix_formatting.js</a> file.</strong></li>
          <li id="palette"><strong>palette</strong> &mdash; array of 8bit XTerm colors. <strong>NOTE: from version 0.9.0 provided by <a href="js/unix_formatting.js">unix_formatting.js</a> file.</strong></li>
          <li id="overtyping"><strong>overtyping([string])</strong> &mdash; convert string containing formatting from <strong>man</strong> command (<i>overtyping</i>) to terminal formatting. If used with format it will produce html from <strong>man</strong>. <strong>NOTE: from version 0.9.0 provided by <a href="js/unix_formatting.js">unix_formatting.js</a> file.</strong></li>
          <li id="from_ansi"><strong>from_ansi([string])</strong> &mdash; convert ANSI encoding to terminal encoding. If used with format it will produce html from ANSI encoding. <strong>NOTE: from version 0.9.0 provided by <a href="js/unix_formatting.js">unix_formatting.js</a> file.</strong></li>
          <li id="parseArguments"><strong>parse_arguments([string])</strong> &mdash; return array from command line string. It process number (integer and floats) and regexes, it also convert escaped \x \0 to real characters when inside double quote. It remove enclosing quotes from strings.</li>
          <li id="splitArguments"><strong>split_arguments([string])</strong> &mdash; similar to <strong>parse_arguments</strong> but convert only escape space to space and remove enclosing quotes from strings.</li>
          <li id="parseCommand"><strong>parse_command([string])</strong> &mdash; return object with keys: <strong>name</strong>, <strong>args</strong> and <strong>rest</strong> that contain name of the command, it's arguments and string without command name. It use <strong>parse_arguments</strong> function.</li>
          <li id="splitCommand"><strong>split_command([string])</strong> &mdash; similar to <strong>parse_command</strong> but use <strong>split_arguments</strong>.</li>
          <li id="defaults"><strong>defaults</strong> &mdash; contain all default options used by terminal plugin. All strings are in <strong>defaults.strings</strong> and can be translated.</li>
          <li id="normalize"><strong>normalize([string])</strong> &mdash; function that add extra last item in formatting if not present (added in 1.3.0) .</li>
          <li id="substring"><strong>substring([string, start_index, end_index])</strong> &mdash; return subset of the string keeping formatting, end_index is optional (added in 1.3.0) .</li>
          <li id="unclosedStrings"><strong>unclosed_strings([string])</strong> &mdash; return true if string have unclosed strings, it's used when parsing command for internal use (rpc or object interpreter) if return true it will throw exception (added in 1.3.0).</li>
          <li id="iterateFormatting"><strong>iterate_formatting([string, callback(data)])</strong> &mdash; helper function used in substring and split_equal that iterate over string and execute callback when in text with object:
            <ul>
              <li>count: number of characters in text (it skip brackets and formatting)</li>
              <li>index: character index (including brackets and formatting)</li>
              <li>formatting: string containing current formatting if itration is in formatting or empyt string if not</li>
              <li>space: index of last space</li>
            </ul>
            Function added in 1.3.0
          </li>
          <li id="parse_options"><strong>parse_options([array|string], object)</strong> &mdash; function will parse options and return an object like <a href="https://www.npmjs.com/package/yargs-parser">yargs parser</a>. For each single option like -a create a field with true or value after the option (-af foo will create <code>a: true, f: "foo"</code>, if f is in boolean option array it will put <code>f: true</code> and foo will be in "_"), _ field will contain all non options, and log options (like --file at the begining) will be into object like <code>file: "foo.js"</code>).
            <p>Examples:</p>
            <pre class="javascript">
$.terminal.parse_options("--foo bar -abc baz quux");
// {_: ["quux"], a: true, b: true, c: "baz", foo: "bar"}

var cmd = $.terminal.split_command("copy --foo bar -abc baz quux");
$.terminal.parse_options(cmd.args, {boolean: ["foo", "c"]);
// all options will be boolean and they arguments will be counted as free arguments
// {_: ["bar", "baz", "quux"], a: true, b: true, c: true, foo: true}

$('body').terminal({
    copy: function(...args) {
        var options = $.terminal.parse_options(args);
        if (options.dest && options.src) {
            if (copy(options.src, options.dest)) {
                this.echo('[[;darkgreen;]successful]');
            } else {
                this.error('failed');
            }
        } else {
            this.echo('usage\ncopy --dest &lt;file&gt; --src &lt;file&gt;');
        }
    }
}, {checkArity: false});</pre>
          </li>
          <li id="tracking_replace"><strong>tracking_replace(string, regex, replacement, position)</strong> &mdash; Function work the same as normal replace but keep track of position change so you can use it in formatter, it return the same output as required by formatters in version >=1.19.0.</li>
        </ul>
      </article>
      <article id="cmd">
        <header><h2>Command Line</h2></header>
        <p>Command Line is created as separate plugin, so you can create instance of it (if you don't want whole terminal):</p>
        <pre class="javascript">
$('#some_id').cmd({
    prompt: '$&gt; ',
    width: '100%',
    commands: function(command) {
        //process user commands
    }
});</pre>
        <p>Here is <a href="https://codepen.io/jcubic/pen/XaoqGp">demo that creates terminal using only cmd</a>.</p>
        <p>And this pen is a demo of creating <a href="https://codepen.io/jcubic/pen/qPMPOR">text based dialog</a>.</p>
        <p>Command Line options: name, keypress, keydown, mask, enabled, width, prompt, commands, keymap.</p>
      </article>
      <article id="cmd-methods">
        <header><h2>Command Line Methods</h2></header>
        <p>This is a list of methods if you are what to use only command line.</p>
        <ul>
          <li><strong>name([string])</strong> &mdash; if you pass string it will set name of the command line (name is use for tracking command line history) or if you call without argument it will return name.</li>
          <li><strong>history()</strong> &mdash; returns instance of history object.</li>
          <li><strong>set(string, [bool])</strong> &mdash; set command line (optional parameter is is set to true will not change cursor position).</li>
          <li><strong>insert(string, [bool])</strong> &mdash; insert string to command line in place of the cursor if second argument is set to true it will not change position of the cursor.</li>
          <li><strong>get()</strong> &mdash; return current command.</li>
          <li><strong>commands([function])</strong> &mdash; set or get function that will be called when user hit enter.</li>
          <li><strong>destroy()</strong> &mdash; remove plugin.</li>
          <li><strong>prompt([string|function])</strong> &mdash; set prompt to function or string &mdash; if called without argument it will return current prompt.</li>
          <li><strong>position([number])</strong> &mdash; set or get position of the cursor.</li>
          <li><strong>resize([number])</strong> &mdash; set numbers of characters &mdash; if called with number it will set number of character if call without argument it will recalculate the number of characters depending on actual size.</li>
          <li><strong>enable/disable/isenabled</strong> &mdash; guess what they do.</li>
          <li><strong>mask([string])</strong> &mdash; if argument is true it will mask all typed characters with provided string. If called without argument it will return current mask.</li>
        </ul>
      </article>
      <article id="shortcuts">
        <header><h2>Keyboard shortcuts</h2></header>
        <p>This is list of keyboard shortcuts (mostly taken from bash):</p>
        <ul>
          <li><strong>TAB</strong> &mdash; tab completion is available or tab character.</li>
          <li><strong>Shift+Enter</strong> &mdash; insert new line.</li>
          <li><strong>Up Arrow/CTRL+P</strong> &mdash; show previous command from history.</li>
          <li><strong>Down Arrow/CTRL+N</strong> &mdash; show next command from history.</li>
          <li><strong>CTRL+R</strong> &mdash; Reverse Search through command line history.</li>
          <li><strong>CTRL+G</strong> &mdash; Cancel Reverse Search.</li>
          <li><strong>CTRL+L</strong> &mdash; Clear terminal.</li>
          <li><strong>CTRL+Y</strong> &mdash; Paste text from kill area.</li>
          <li><strong>Delete/backspace</strong> &mdash; remove one character from right/left to the cursor.</li>
          <li><strong>Left Arrow/CTRL+B</strong> &mdash; move left.</li>
          <li><strong>CTRL+TAB</strong> &mdash; swich to next terminal (use scrolling with animation) &mdash; don't work in Chrome.</li>
          <li><strong>Right Arrow/CTRL+F</strong> &mdash; move right.</li>
          <li><strong>CTRL+Left Arrow</strong> &mdash; move one word to the left.</li>
          <li><strong>CTRL+Right Arrow</strong> &mdash; move one word to the right.</li>
          <li><strong>CTRL+A/Home</strong> &mdash; move to beginning of the line.</li>
          <li><strong>CTRL+E/End</strong> &mdash; move to end of the line.</li>
          <li><strong>CTRL+K</strong> &mdash; remove the text after the cursor and save it in kill area.</li>
          <li><strong>CTRL+U</strong> &mdash; remove the text before the cursor and save it in kill area.</li>
          <li><strong>CTRL+V/SHIFT+Insert</strong> &mdash; insert text from system clipboard.</li>
          <li><strong>CTRL+W</strong> &mdash; remove text to the begining of the word (don't work in Chrome).</li>
          <li><strong>CTRL+H</strong> &mdash; remove text to the end of the line.</li>
          <li><strong>ALT+D</strong> &mdash; remove one word after the cursor &mdash; don't work in IE.</li>
          <li><strong>PAGE UP</strong> &mdash; scroll up &mdash; don't work in Chrome.</li>
          <li><strong>PAGE DOWN</strong> &mdash; stroll down &mdash; don't work in Chrome.</li>
          <li><strong>CTRL+D</strong> &mdash; run previous interpreter from the stack or call logout (if terminal is using authentication and current interpreter is the first one). It also cancel all ajax call, if terminal is paused, and resume it.</li>
        </ul>
      </article>
      <article id="additional">
        <header><h2>Additional terminal controls</h2></header>
        <p>All interpreters have attached <strong>mousewheel</strong> event so you can stroll them using mouse. To swich between terminals you can just <strong>click on terminal</strong> that you want to <strong>activate</strong> (you can also use <a href="#focus">focus</a> method).</p>
        <p>On Unix, If you select text using mouse you can paste it using middle mouse button (from version 0.8.0).</p>
      </article>
      <article id="change_colors">
        <header><h2>Changing Colors</h2></header>
        <p>To change color of terminal simply modify "jquery.terminal.css" file it's really short and not complicated, but you should set inverted class background-color to be the same as color of text.</p>
        <p>To change color of one line you can call css jquery method in finalize function passed to echo function.</p>
        <pre class="javascript">terminal.echo("hello blue", {
    finalize: function(div) {
        div.css("color", "blue");
    }
});</pre>
        <p>You can also use <a href="#echo">formatting using echo</a> function. To change whole terminal colors see <a href="#style">style section</a>.</p>
        <p>You can also use css variables (aka custom properties) to change colors of the whole terminal see <a href="#style">style section</a>.</p>
      </article>
      <article id="translation">
        <header><h2>Translation</h2></header>
        <p>All strings used by the plugin are located in <code>$.terminal.defaults.strings</code> object, so you can translate them and have i18n.</p>
      </article>
      <article id="errors">
        <header><h2>Error Handling</h2></header>
        <p>All exceptions in user functions (interpreter, prompt, and greetings) are catch and proper error is displayed on terminal (with stack trace). If you want to handle exceptions differently you can add <a href="#exceptionHandler">exceptionHandler</a> option and create different logic, for instance send exceptions to server or show just exception name without stack trace.</p>
      </article>
      <article id="style">
        <header><h2>Style</h2></header>
        <p>From version 0.8.0 blinking cursor is created using CSS3 animations (if available) so you can change that animation anyway you like, just look at <a href="/css/jquery.terminal.css">jquery.terminal.css</a> file. If browser don't support CSS3 animation blinking is created using JavaScript.</p>
        <p>To change color of the cursor to green and backgroud to white you can use this css:</p>
        <pre class="css">.terminal, .cmd {
    background: white;
    color: #0f0;
}
.terminal .inverted, .cmd .inverted, .cmd .cursor.blink {
    background-color: #0f0;
    color: white;
}
@-webkit-keyframes terminal-blink {
  0%, 100% {
      background-color: #fff;
      color: #0f0;
  }
  50% {
      background-color: #0e0;
      color: #fff;
  }
}

@-ms-keyframes terminal-blink {
  0%, 100% {
      background-color: #fff;
      color: #0f0;
  }
  50% {
      background-color: #0e0;
      color: #fff;
  }
}

@-moz-keyframes terminal-blink {
  0%, 100% {
      background-color: #fff;
      color: #0f0;
  }
  50% {
      background-color: #0e0;
      color: #fff;
  }
}
@keyframes terminal-blink {
  0%, 100% {
      background-color: #fff;
      color: #0f0;
  }
  50% {
      background-color: #0e0;
      color: #fff;
  }
}</pre>
        <p>From version 1.0.0 you can use css variables with code like this:</p>
        <pre class="css">.terminal {
  --color: rgba(0, 128, 0, 0.99);
  --background: white;
}</pre>
        <p>If you want to have consistent selection you should use rgba color with 0.99 transparency, see this <a href="https://stackoverflow.com/a/7224621/387194">stackoverflow answer</a>.</p>
        <p>The only caveat is that css variables are not supported by IE <strike>nor Edge</strike>.</p>
        <p>To change cursor to vertical bar you can use this css:</p>
        <pre class="css">.cmd .cursor.blink {
  color: #aaa;
  border-left: 1px solid #aaa;
  background-color: black;
  margin-left: -1px;
}
.terminal .inverted, .cmd .inverted, .cmd .cursor.blink {
    border-left-color: #000;
}
@-webkit-keyframes terminal-blink {
  0%, 100% {
      border-left-color: #aaa;
  }
  50% {
      border-left-color: #000;
  }
}

@-ms-keyframes terminal-blink {
  0%, 100% {
      border-left-color: #aaa;
  }
  50% {
      border-left-color: #000;
  }
}

@-moz-keyframes terminal-blink {
  0%, 100% {
      border-left-color: #aaa;
  }
  50% {
      border-left-color: #000;
  }
}
@keyframes terminal-blink {
  0%, 100% {
      border-left-color: #aaa;
  }
  50% {
      border-left-color: #000;
  }
}</pre>
        <p>From 1.0.0 version you can simplify this using this css:</p>
        <pre class="css">.terminal {
  --color: rgba(0, 128, 0, 0.99);
  --background: white;
  --animation: terminal-bar;
}</pre>
        <p>If you need to support IE <strike>or Edge</strike> you can set animation using:</p>
        <pre class="css">.cmd .cursor.blink {
    -webkit-animation-name: terminal-underline;
       -moz-animation-name: terminal-underline;
        -ms-animation-name: terminal-underline;
            animation-name: terminal-underline;
}
.terminal .inverted, .cmd .inverted {
    border-bottom-color: #aaa;
}</pre>
        <p>Or this css for bar cursor:</p>
        <pre class="css">.cmd .cursor.blink {
    -webkit-animation-name: terminal-bar;
       -moz-animation-name: terminal-bar;
        -ms-animation-name: terminal-bar;
            animation-name: terminal-bar;
}
.terminal .inverted, .cmd .inverted {
    border-left-color: #aaa;
}</pre>
        <p>From version 1.11.0 there are handy css classes (underline-animation and bar-animation) that need to be added to terminal element, so you don't overwrite your css variables.</p>
        <p>To change the color of the cursor with differerent animation that will work in IE <strike>or Edge</strike> you will need to create new <code>@keyframes</code> with different colors, like in previous examples.</p>
        <p>To change font size of the terminal you can use this code:</p>
        <pre class="css">.terminal, .cmd, .terminal .terminal-output div div, .cmd .prompt {
    font-size: 20px;
    line-height: 24px;
}</pre>
        <p>Or from version 1.0.0 (and if you don't care about IE <strike>or Edge</strike>) you can simplify the code using --size css variables like this:</p>
        <pre class="css">.terminal {
  --size: 2;
}</pre>
        <p>The size is relative to original size so 1 is normal size, 1.5 is 150% and 2 is double size.</p>
        <p>You can take a look at the <a href="https://codepen.io/jcubic/pen/xReWxJ?editors=0100">demo</a>.</p>
        <p>From version 1.10.0 you can use <strong><code>--link-color</code></strong> to change color of the links. From this version links now change background to color and color to background on hover.</p>
        <p>From version 1.7.0 you can use new <code><strong>:focus-within</strong></code> pseudo selector to change style when terminal or cmd is in focus:</p>
        <pre class="css">.cmd:focus-within .prompt * {
    color: red;
}</pre>
        <p>From version 1.15.0 (thanks for PR from <a href="https://github.com/jcubic/jquery.terminal/pull/386">David Refoua</a>) you can use <strong><code>--error-color</code></strong> to change color of errors</p>
        <p>You can check it out in this <a href="https://codepen.io/jcubic/pen/BwBYOZ?editors=0100">codepen</a></p>
        <p>If you want terminal to look like from OSX, Ubuntu or Winows 10 you can take a look at <a href="https://github.com/davidecaruso/shell.js">shell.js library</a>, I've used its css with some tweaks to work with jQuery Terminal. See <a href="https://codepen.io/jcubic/pen/WZvYGj">codepen demo</a></p>
        <p id="glow"><strong>How to add glow to the terminal</strong></p>
        <p>Here is proper code that add glow:</p>
        <pre class="css">#term {
    --color: rgba(0, 200, 0, 0.99);
    --animation: terminal-glow;
    text-shadow: 0 0 3px rgba(0, 200, 0, 0.6);
}
.terminal .terminal-output > :not(.raw) .error,
.terminal .terminal-output > :not(.raw) .error * {
    text-shadow: 0 0 3px rgba(200, 0, 0, 0.6);
}
.terminal .terminal-output > :not(.raw) a[href] {
    text-shadow: 0 0 3px rgba(15, 96, 255, 0.6);
}</pre>
        <p>terminal-glow animation will be new animation in version 2.1.0, you can test this in devel branch.</p>
        <p>This will make sure that links have blue and errors red glow.</p>
      </article>
      <article id="formatter">
        <header><h2>Formatter object</h2></header>

        <p><code><strong>$.terminal.formatter</strong></code> is object that use new features of ECMAScript that allow to use normal object in place of regular expression.</p>
        <p>It work in any major browser except IE.</p>

        <p>You can use this object like Regex in search/match/replace/split string methods, and it use internal regexes (it would be hard to name all different regular expressions used for different tasks) to do all those actions.</p>
        <pre class="javascript">
var re = $.terminal.formatter;

var str = 'aa[[;blue;]bb] cc [[;red;]] dd';
// split is handled by $.terminal.split_formatting that split formatting
// and text but it remove empty strings.
console.log(str.split(re));

// in replace each part of the formatting is in its own capturing
// group (except brackets and semicolons)

// both of those remove formatting from string, same as $.terminal.strip
console.log(str.replace(re, function(_, style, color, background) {
    return arguments[6];
}));
console.log(str.replace(re, '$6'));

// this will return array of all instances of formatting from string
console.log(str.match(re));

// this will return index of first formatting
console.log(str.search(re));
        </pre>
        <p>formatter don't work with extended commands, so the brackets need to have at least 2 semicolons.</p>
      </article>
      <article id="formatters">
        <header><h2>Formatters</h2></header>
        <p>Formatters are a way to format strings in different way. You can create syntax highligher with it. Formatter is a function that get string as input and return terminal formatting <a href=#echo">see echo method</a> (it can also be array with regex and replacement where replacement can be string or function like in normal string::replace). To add new formatter you simply push (or unshift if you want the benefits of nested formatting) new function to $.terminal.defaults.formatters, by default there is one formatter for nested formatting so you can echo <code>[[;red;]red[[;blue;]blue] also red]</code> and there are 2 files (xml_formatting.js and unix_formatting.js) with formatters in <a href="https://github.com/jcubic/jquery.terminal/tree/master/js">js directory on github</a>, there is also <a href="examples.php#syntax_highlight">SQL syntax example</a> and <a href="#prism">Syntax hightlighter using PrismJS</a> in prism.js file.</p>
        <p>From version 1.10.0 formatter can be an array with regex and replacement string or function, the second option is requried if you want your formatter that change the length of the text like with <a href="https://codepen.io/jcubic/pen/qPVMPg">emoji demo</a>. Regex formatter have also 3rd argument which can be object with options (right now only one option is avaible which is loop nad keep replacing until it don't find match).</p>
        <p>From same version formatter function can have special property <code>__meta__</code> set to true (used by nested formatter) that allow to process whole text including formatting, instead of just text between formatting. It was created for internal use, but you can use it in your own code.</p>
        <p>From version 1.19.0 formatter can return array [string, position] and it pass cursor position as option, if you're using replacement that change length of the string (like in emoji demo) you can using utility <strong><a href="#tracking_replace">tracking_replace</a></strong> that return array with string and position like is recomended by new formatters.</p>
        <h3 id="cursor_position">Cursor Position</h3>
        <p>If you have formatter that change length of the string you will have strange cursor position when you move using arrow keys. There are two different cursor positions you move in original cursor position on input command and you get display of virtual cursor on output string so it sometimes stay in the same position like with emoji demo (you will be after emoji while original cursor is inside word that is used to created emoji so you can delete any key inside the word). There are also two functions to move the cursor (on original text <strong><a href="#display">display</a></strong> and <strong><a href="#display_position">display_position</a></strong> to move virtual one).</p>
      </article>
      <article id="keyboard">
        <header><h2>Keyboard events</h2></header>
        <p>There are 3 keyboard events (all of them you can add in terminal, cmd and push command):</p>
        <ul>
          <li><strong>keymap</strong> &mdash; simpler events you can add uppercase shortcut like CTRL+V, the callback function is <code>function(e, original) {</code>, the original is original function callback that can be called, because your function overwrite original behvaior.</li>
          <li><strong>keydown</strong> &mdash; this event is fired before <strong>keymap</strong> so you can return false to prevent default <strong>keymap</strong></li>
          <li><strong>keypress</strong> &mdash; is used to handle inserting of characters if you want to prevent certain characters to be inserted you can return false for those characters.</li>
        </ul>
        <p>Caveats: the shortcut CTRL+D is handled by both <strong>keydown</strong> and <strong>keymap</strong>. If terminal is paused is handled by <strong>keydown</strong> and if not in <strong>keymap</strong>. If you want to overwrite CTRL+D when terminal is paused you need to pass false to <a href="#pause_events">pauseEvents</a> option and use <strong>keydown</strong> otherwise you need to add function to <strong>keymap</strong>.</p>
      </article>
      <article id="authentication">
        <header><h2>Authentication</h2></header>
        <p>You can provide your authentication function which will be called when user enter login and password. Function must have 3 arguments first is <strong>user name</strong>, second his <strong>password</strong> and third is <strong>callback function</strong> which must be called with token or falsy value if user enter wrong user and password. (You should call server via AJAX to authenticate the user).</p>
        <p>You can retrieve token from terminal using <a href="#token">token method</a> on terminal instance. You can pass this token to functions on the server as first parameter and check if it's valid token.</p>
        <p>If you set interpreter to string (it will use this string as URI for JSON-RPC service) you can set login function to string (to call custom method on service passed as interpreter) or true (it will call login method).</p>
        <p>If you set URI of JSON-RPC service and login to true or string, it will always pass token as first argument to every JSON-RPC method.</p>
        <p>From version 1.16.0 you can return promise of a token from login function.</p>
      </article>
      <article id="security">
        <header><h2>Security</h2></header>
        <p>Because of security in version 1.20.0 links with protocols different then ftp or http(s)
        (it was possible to enter javascript protocol, that could lead to XSS if author of hte app
        echo user input and save it in DB) was turn off by default. To enable it, you need to use
        <strong><code>anyLinks: true</code></strong> option.</p> <p>In version 1.21.0 executing
        terminal methods using extendend commands
        <strong><code>[[&nbsp;terminal::clear()&nbsp;]]</code></strong> was also disabled by default
        because attacker (depending on your application) could execute
        <strong>terminal::echo</strong> with raw option to enter any html. To enable this feature
        from this version you need to use <strong><code>invokeMethods: true</code></strong>
        option.</p> <p>The features are safe to enable, if you don't save user input in DB and don't
        echo it back to different users (like with chat application). It's also safe if you escape
        formatting before you echo stuff.</p> <p>If you don't save user input in DB but allow to
        echo back what user types and have enabled <a href="#execHash">execHash</a> options, you may
        have reflected XSS vulnerability if you enable this features. If you escape formatting this
        options are also safe.</p> <p>One more thing to mention that if you're using raw option to
        echo back stuff from users (and show it other users), you're also vulnerable to XSS like in
        any application. So if you wan to do that you need to sanitize user input.</p> <p>You can
        find <a href="https://www.owasp.org/index.php/XSS_Filter_Evasion_Cheat_Sheet">ways to bypass
        XSS filtering on OWASP</a>. The best is always a whitelist of things that is possible to
        enter by the users.</p>
        <p><strong>NOTE:</strong> XSS is possible only when you have application that echo back
        stuff from your users, like with chat application, guest book or when you save state in <a
        href="#execHash">url hash and allow to execute it</a> together with echo stuff from
        users. If you don't do that and you control what is echo on terminal you're fine with any
        options terminal provide.</p>
        <p><strong>NOTE 2:</strong> To disable exec if you have `execHash` (or echo stuff from users
        with `invokeMethods: true`), you can also set option `{exec: false}` to your `echo` call and
        use it only when you get values from server (not from DB indireclty from users). If you do
        this you will be able to echo stuff from users and execute terminal methods from server
        (this feature is mostly done just for that).</p>
      </article>
      <article id="3rd">
        <header><h2>Third party code and additional plugins</h2></header>
        <p>Terminal include this 3rd party libraries:</p>
        <ul>
          <li>Storage plugin by Dave Schindler.</li>
          <li><a href="http://jquery.offput.ca/timers/">jQuery Timers</a>.</li>
          <li>Cross-Browser Split 1.1.1 by Steven Levithan.</li>
          <li>jQuery Caret by Gideon Sireling.</li>
          <li>sprintf.js by Alexandru Mărășteanu.</li>
        </ul>
        <p>terminal also define this helper functions:</p>
        <ul>
          <li>
            <p>$.jrpc &mdash; JSON-RPC helper function.</p>
            <p>Function arguments:</p>
            <ul>
              <li>string JSON-RPC service url or uri,</li>
              <li>string method,</li>
              <li>array arguments or empty array,</li>
              <li>success callback function with result (single argument contain whole RPC response including errors),</li>
              <li>error callback called with ajax errors.</li>
            </ul>
          </li>
          <li>$.omap &mdash; version of map that handle objects.</li>
          <li>$.fn.resizer &mdash; helper plugin that execute callback when element is resized. If called with string 'unbind' it will remove the event. It use ResizeObserver or hidden iframe.</li>
        </ul>
        <p>Additional files:</p>
        <p>From version 1.20.0 every file is UMD module.</p>
        <ul>
          <li>
            <p>unix_formatting.js &mdash; The file is defining two formatters <code>$.terminal.overtyping</code> (that handle output from man command, backspaces and ANSI code \x1b[K that clear line) and <code>$.terminal.from_ansi</code> (that handle graphic ANSI escape codes) and adding them to the beginning of $.terminal.defaults.formatters, so if ANSI escape generate nested formatting it will be picked up by nesting formatter defined in jQuery Terminal source code.</p>
          </li>
          <li id="prism">
            <p>prism.js &mdash; contain monkey patch for <a href="https://prismjs.com/">PrismJS library</a> (for syntax highlighting) that output terminal formatting. To use it you need to include PrimsJS JavaScript and CSS files.</p>
            <pre class="html">
&lt;link rel="stylesheet prefetch" href="https://cdn.jsdelivr.net/npm/prismjs@1.14.0/themes/prism.css"/&gt;
&lt;script src="https://cdn.jsdelivr.net/npm/prismjs@1.14.0/prism.min.js"&gt;&lt;/script&gt;
            </pre>
            <p>then after you include PrismJS you need to include terminal prism monkey patch and then you can use
              <code>$.terminal.prism(language, text)</code>. By default prism include only css,js and markup (html) grammars. To include more you need to load <a href="https://unpkg.com/prismjs@1.15.0/components/">appropriate js files</a>. If no language is found the function returns unmodifed text.</p>
            <p>First argument is language so you can bind with fixed language and add that function to formatters array:</p>
            <pre class="javascript">
$.terminal.defaults.formatters.push(
     $.terminal.prism.bind(null, 'javascript')
);
            </pre>
            <p>From version 1.18.0 you can use helper <strong>$.terminal.sytnax</strong>.</p>
            <pre class="javascript">
$.terminal.syntax('website');
            </pre>
            <p>This is preferable way to have syntax highlighting ('website' is special language addded in version 1.18.0 and renders html, css and javascript).</p>
          </li>
          <li>
            <p>less.js &mdash; this file contain jQuery plugin that can be use with terminal (and since terminal instance if extension of jQuery object you can invoke it like terminal method).</p>
            <pre class="javascript">$('body').terminal({
    less: function(file) {
       // this is terminal instance and arrow function allow to use
       // this from outside
       $.get(file, (text) => this.less(text));
    }
});</pre></li>
          <li>dterm.js &mdash; contain jQuery plugin <code>dterm</code> that is combination of jQuery UI Dialog and jQuery Terminal.</li>
          <li>
            <p>xml_formatting.js &mdash; created as example of formatter. By including this file it allow to use xml syntax to color text (using echo).
            <pre class="html">
&lt;red&gt;foo &lt;green&gt;bar&lt;/green&gt; baz&lt;/red&gt;
            </pre>
          </li>
          <li>
            <p>ascii_table.js &mdash; Define UMD module with ascii_table function that return simple ASCII table, like the one from mysql cli command. it have wcwidth as dependecy, in browser it's optional.</p>
          </li>
          <li>
            <p>pipe.js &mdash; defines experimental pipe interpreter (it support | and custom redirects) see <a href="examples.php#pipe">pipe example</a>.</p>
        </ul>
      </article>
    </section>
    <footer>
      <p id="copy">Copyright (c) 2010-<?php  echo date('Y'); ?> <a href="https://jcubic.pl/jakub-jankiewicz">Jakub T. Jankiewicz</a> Website: <a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a> <span style="display:none"><a href="https://plus.google.com/104010221373218601154?rel=author">g+</a></span> <span>source on <a href="https://github.com/jcubic/jquery.terminal-www">github</a></p>
    </footer>
    <script>
     jQuery(function($, undefined) {
         // something is making blur on terminal on click
         $(document).on('click', '.terminal', function(e) {
             e.stopPropagation();
         });
         $('pre.javascript').syntax("javascript");
         $('pre.css').syntax("css");
         $('pre.html').syntax("html");
         // sort api methods
         $('#terminal_utilites, #instance_methods, #options').each(function() {
             var $ul = $(this).find('> ul');
             $ul.find('> li').detach().sort(function(a, b) {
                 a = $(a).find('strong:eq(0)').text();
                 b = $(b).find('strong:eq(0)').text();
                 return a == b ? 0 : (a > b ? 1 : -1);
             }).appendTo($ul);
         });
     });
    </script>
    <? if ($_SERVER["HTTP_HOST"] != "localhost" && !isset($_GET['track'])): ?>
    <!-- Matomo -->
    <script type="text/javascript">
      var _paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//piwik.jcubic.pl/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '3']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- End Matomo Code -->
    <noscript>
    <!-- Matomo Image Tracker-->
    <img src="https://piwik.jcubic.pl/matomo.php?idsite=3&amp;rec=1" style="border:0" alt="" />
    <!-- End Matomo -->
    </noscript>
    <? endif; ?>
  </body>
</html>
