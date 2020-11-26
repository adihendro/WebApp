
<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?> -->


<script>
    var url = 'https://smart-scale-system.azurewebsites.net/api/Tampilkan'
    $.getJSON(url);
</script>