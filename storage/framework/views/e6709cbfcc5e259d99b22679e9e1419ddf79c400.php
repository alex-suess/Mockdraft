<ul>
    <?php $__currentLoopData = $user->board; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pick): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>;
    <li>
        <?php echo e($pick->name); ?>

    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</ul>
