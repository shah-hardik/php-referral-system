<?php include $modulePage; ?>
 <?php include "scripts.php"; ?>

<?php include $jsInclude; ?>


 <script src="//code.jquery.com/jquery.js"></script>
  <?php if ($error): ?>
            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        $('#error_msg_div').fadeOut(1200);
                    }, 5000);
                });
            </script>
        <?php endif; ?>

        <?php if ($greetings): ?>
            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        $('#success_msg_div').fadeOut(1200);
                    }, 5000);
                });
            </script>
        <?php endif; ?>