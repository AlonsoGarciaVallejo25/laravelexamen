
<?php $__env->startSection('title','Listado de categorías'); ?>

<?php $__env->startSection('content'); ?>
  <h2>Listado</h2>

  <?php if($categorias->isEmpty()): ?>
    <p>No hay categorías aún.</p>
  <?php else: ?>
    <ul>
      <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
          <a href="<?php echo e(route('categorias.show',$c->id)); ?>">
            <?php echo e($c->nombre); ?> — <?php echo e(number_format($c->precio,2)); ?> € (Stock: <?php echo e($c->stock); ?>)
          </a>
        </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  <?php endif; ?>

  <h3>Nueva categoría</h3>
  <form action="<?php echo e(route('categorias.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="descripcion" placeholder="Descripción">
    <input type="number" step="0.01" name="precio" placeholder="Precio" required>
    <input type="number" name="stock" placeholder="Stock" required>
    <button type="submit">Guardar</button>
  </form>

  <?php if($errors->any()): ?>
    <p style="color:red">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($error); ?><br>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\laravel\AE_AGV\resources\views/categorias/index.blade.php ENDPATH**/ ?>