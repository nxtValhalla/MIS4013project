<script>
    function formatPhoneNumber(input) {
    let value = input.value.replace(/\D/g, ''); // Remove all non-digit characters
    if (value.length <= 3) {
        input.value = '(' + value;
    } else if (value.length <= 6) {
        input.value = '(' + value.substring(0, 3) + ') ' + value.substring(3);
    } else {
        input.value = '(' + value.substring(0, 3) + ') ' + value.substring(3, 6) + '-' + value.substring(6, 10);
    }
}
</script>
