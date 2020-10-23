


<h1><center>Dashboard</center></h1>



<script>
    $(document).ready(() => {
        $(".test").remove();

        addScript("js/dashboardScript.js");
        addScript("script/employe.js");
        addScript("script/Login.js");
    })

    function addScript(src) {
        var s = document.createElement('script');
        s.setAttribute('src', src);
        s.setAttribute('class', "test");
        $(".ms-article").append(s);
    }

</script>
