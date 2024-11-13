<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Diamo12's Web Tools &amp; Guides  - Home Page</title>
        
        <link rel="stylesheet" href="https://unpkg.com/rivet-core@2.8.1/css/rivet.min.css">
    </head>
    <body>
        <x-header/>
        <main id="main-content" class="rvt-flex rvt-flex-column rvt-grow-1">
            <div class="rvt-billboard">
                <div class="rvt-billboard__body">
                    <h2 class="rvt-billboard__title">Find useful tools, learn about programming, or even just provide feedback on what's here!</h2>
                    <div class="rvt-billboard__content [ rvt-flow ]">
                        <p>I just built this site for fun, so feel free to explore, use/experiement with the tools I've made available, and provide feedback on what's here. And, who knows, you might stumble across this website's secret<a href=''>.</a></p>
                    </div>
                </div>
            </div>
        </main>
        <footer class="rvt-footer-base rvt-footer-base--light">

        </footer>
        
        <script src="https://unpkg.com/rivet-core@2.8.1/js/rivet.min.js"></script>
        <script>Rivet.init();</script>
    </body>
</html>
