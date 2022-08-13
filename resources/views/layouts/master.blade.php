<!DOCTYPE html>
<html lang="en">

    @include("layouts.header")
    <body>
        <!-- Responsive navbar-->
            @include("layouts.nav")




            @yield("main")



            @include("layouts.footer")
    </body>
</html>
