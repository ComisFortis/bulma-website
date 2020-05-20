    <p class="title is-3 is-spaced">Container</p>
    <p class="subtitle is-5">Define the size of each column individually</p>
    <!-- -------------------------------------------------------------------------- -->
    <div class="container is-fluid ">
        <div class="notification has-background-primary">
            This container is <strong>fluid</strong>: it will have a 32px gap on either side, on any
            viewport size.
        </div>
        <br>
        <div class="container">
            <div class="notification has-background-primary">
                This container is <strong>centered</strong> on desktop it will have a maximum width of 960px.
            </div>
            <br>
        </div>
        <div class="container is-widescreen">
            <div class="notification has-background-primary">
                This container is <strong>fullwidth</strong> <em>until</em> the <code>$widescreen</code> breakpoint it will have a maximum width of 1152px.
            </div>
        </div>
        <br>
    </div>
    <div class="container is-fullhd">
        <div class="notification has-background-primary">
            This container is <strong>fullwidth</strong> <em>until</em> the <code>$fullhd</code> breakpoint it will have a maximum width of 1344px.
        </div>
    </div>
    <br><!-- provisorische lösung -->