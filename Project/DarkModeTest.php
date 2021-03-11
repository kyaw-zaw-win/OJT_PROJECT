<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Dark Mode Switcher Example</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<style>


.dark {
  background: #181818;
  color: #fff;
}
  input[type=checkbox].toggle-switch {
  transform: rotate(0deg);
  appearance: none;
  -moz-appearance: none;
  -webkit-appearance: none;
  outline: 0;
  cursor: pointer;
  /* width of the track */
  width: 4em;
  /* height of the track */
  height: 1.5em;
  border-radius: 3em;
  background-color: #ebebeb;
  transition: background-color 0.09s ease-in-out;
  position: relative;
}
input[type=checkbox].toggle-switch:active::after {
  background-color: #f2f2f2;
  padding-right: .8em;
}
input[type=checkbox].toggle-switch::after {
  content: '';
 /* toggle shape --
height should equal width
to maintain circle */
  width: 2em;
  height: 2em;
  background-color: white;
  border-radius: 3em;
  position: absolute;
  left: -5px;
  top: 50%;
  transform: translateY(-50%);
  transition: left 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), padding 0.3s ease, margin 0.3s ease;
  box-shadow: 2px 0px 5px 0 rgba(0, 0, 0, 0.15);
}

input[type=checkbox].toggle-switch:checked {
  background-color: #333;
  color: blue;
}
input[type=checkbox].toggle-switch:checked:active::after
 {
  margin-left: -.8em;
}
input[type=checkbox].toggle-switch:checked::after {
  left: 2em;
  background-color: #242424;
}

.opts {
  color: gray;
}

.opt-1 {
  color: black;
}

.opt-1,
.opt-2 {
  transition: .2s all;
}

.active .opt-1 {
  color: gray;
}
.active .opt-2 {
  color: white;
}
</style>
</head>
  <div class="checkbox-wrap ">
         <input type="checkbox" class="toggle-switch">
      </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>

  $(document).ready(function() {

  $(".toggle-switch").on("click", function(event){
     $("body").toggleClass("dark");
     $("body").toggleClass("active");
 });
});
  </script>
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
