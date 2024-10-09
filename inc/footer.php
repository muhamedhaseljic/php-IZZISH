</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    // script.js
    document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const content = document.querySelector('.content');
    const toggleIcon = document.getElementById('toggleIcon');

    // Check local storage for sidebar state
    const sidebarClosed = localStorage.getItem('sidebarClosed') === 'true';
    if (sidebarClosed) {
        sidebar.classList.add('closed'); // Set sidebar to closed
        content.classList.add('shifted'); // Shift content to the right
        toggleIcon.classList.remove('fa-caret-right'); // Change to close icon
        toggleIcon.classList.add('fa-caret-left'); // Add left caret icon
    }

    document.getElementById('toggleButton').addEventListener('click', function() {
        // Toggle sidebar visibility
        sidebar.classList.toggle('closed');
        content.classList.toggle('shifted');

        // Change icon based on sidebar state
        if (sidebar.classList.contains('closed')) {
            toggleIcon.classList.remove('fa-caret-right');
            toggleIcon.classList.add('fa-caret-left');
            localStorage.setItem('sidebarClosed', 'true'); // Store closed state
        } else {
            toggleIcon.classList.remove('fa-caret-left');
            toggleIcon.classList.add('fa-caret-right');
            localStorage.setItem('sidebarClosed', 'false'); // Store open state
        }
    });
});




  </script>
  </body>
</html>