
        <footer>
            <script src="../public/js/bootstrap.min.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const editButtons = document.querySelectorAll('.btn-primary[data-bs-toggle="modal"]');

                    editButtons.forEach(button => {
                        button.addEventListener('click', function() {
                            // Get the data-id attribute from the button
                            const productId = this.getAttribute('data-id');

                            // Set the value in the hidden input field in the modal
                            document.getElementById('productId').value = productId;

                            // Optionally, update the modal title or other fields if needed
                            document.getElementById('editProductLabel').textContent = 'Edit Product ' + productId;
                        });
                    });
                });

                document.addEventListener("DOMContentLoaded", function() {
                    setTimeout(function() {
                        var alertElement = document.getElementById("autoCloseAlert");
                        if (alertElement) {
                            var alert = new bootstrap.Alert(alertElement);
                            alert.close();
                        }
                    }, 3000); // 3000 milliseconds = 3 seconds
                });
            </script>
        </footer>
    </body>
</html>