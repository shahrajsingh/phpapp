</div>

</div>
<!--row end-->
</div>
<div id="footer">
    Created by Shahraj Singh
</div>

<script>
    let toggle = false;

    function check() {
        if (window.innerWidth > 692) {
            toggle = true;
        }
    }

    function toggleSidebar() {
        toggle = !toggle;
        if (toggle) {
            if (window.innerWidth > 692) {
                document.getElementById("sidebar").style.width = "250px";
                document.getElementById("sidebar-nav").style.visibility = "visible";
            } else {
                document.getElementById('overlay').style.display = "block";
                document.getElementById("sidebar").style.position = "fixed";
                document.getElementById("sidebar").style.width = "250px";
                document.getElementById("sidebar-nav").style.visibility = "visible";
            }

        } else {
            if (window.innerWidth > 692) {
                document.getElementById("sidebar").style.width = "64px";
                document.getElementById("sidebar-nav").style.visibility = "hidden";
            } else {
                document.getElementById('overlay').style.display = "none";
                document.getElementById("sidebar").style.position = "unset";
                document.getElementById("sidebar").style.width = "64px";
                document.getElementById("sidebar-nav").style.visibility = "hidden";
            }

        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>