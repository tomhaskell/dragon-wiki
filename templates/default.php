<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
        <?=$page['name']?>
    </title>

    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.grey-red.min.css" /> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:700,400italic,400|Roboto+Condensed:300|Roboto+Mono|Roboto+Slab" >
    <link rel="stylesheet" href="/css/highlight.css">
    <link rel="stylesheet" href="/css/styles.css">

</head>

<body>
    <div class="dragon-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
        <header class="dragon-header mdl-layout__header mdl-layout__header--waterfall mdl-color--white mdl-color-text--grey-800">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title"><a href="/">dragon</a></span>
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <form ng-submit="todoList.addTodo()" action="search" method="post">
                            <input class="mdl-textfield__input" type="text" id="search" />
                            <label class="mdl-textfield__label" for="search">Enter your query...</label>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <main class="dragon-main mdl-layout__content">
            <div class="dragon-container mdl-grid">
                <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
                <div class="dragon-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">

                    <?=$page['content']?>

                </div>
            </div>
            
            <footer class="dragon-footer mdl-mini-footer">
                <div class="mdl-mini-footer--left-section">
                    <ul class="mdl-mini-footer--link-list">
                        <li>&copy;<?=date('Y')?> THLabs.net</li>
                    </ul>
                </div>
            </footer>
            
        </main>
    </div>
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>
    <script src="/js/highlight.pack.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
</body>

</html>
