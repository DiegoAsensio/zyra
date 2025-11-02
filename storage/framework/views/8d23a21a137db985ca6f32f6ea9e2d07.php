<a class="nav-link <?php echo e(request() ->routeIs($route) ? 'active' : ''); ?>"
     <?php echo request() ->routeIs($route)?'aria-current ="page"':''; ?> href="<?= route($route) ?>">
    <?php echo e($slot); ?>

</a>
<?php /**PATH C:\Users\diego\Documents\GitHub\Zyra-Cowork\resources\views/components/nav-link.blade.php ENDPATH**/ ?>