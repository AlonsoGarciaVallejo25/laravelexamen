
<?php $__env->startSection('title',$categoria->nombre); ?>

<?php $__env->startSection('content'); ?>
  <h2><?php echo e($categoria->nombre); ?></h2>
  <p><?php echo e($categoria->descripcion); ?></p>
  <p><strong>Precio:</strong> <?php echo e(number_format($categoria->precio,2)); ?> €</p>
  <p><strong>Stock:</strong> <?php echo e($categoria->stock); ?></p>
  <a href="<?php echo e(route('categorias.index')); ?>">Volver</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\laravel\AE_AGV\resources\views/categorias/show.blade.php ENDPATH**/ ?>