<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
   
<html>
    <head>

    </head>
    <body >
    <article style="margin:3%;">

          <center> <img src="/images/mohammd.jpg"  class="rounded-xl" style="width: 500px;height: 500px;"> </center> 
    
                <br><br>
            
        <center><h1 style="font-size: 25px; border:3px; background-color:black; color:white;">Mohammd Tarek</h1></center>
              
        <br><br><br>
                <p>
                  <h1 style="font-size:50px;">His writings:</h1>
                  <br><br><br><br>
                  <div style="display: inline;">
                <img src="/images/M1.jpg" alt="" style="width: 400px;height: 400px;">
                <img src="/images/M2.jpg" alt="" style="width: 400px;height: 400px; margin-top:-400px ;margin-left:500px ;">
                <img src="/images/M3.jpg" alt="" style="width: 400px;height: 400px; margin-top:-400px ;margin-left:1000px ;">
                <img src="/images/M4.jpg" alt="" style="width: 400px;height: 400px; margin-top:200px ;margin-left:0px ;">
                <img src="/images/M5jpg.jpg" alt="" style="width: 400px;height: 400px; margin-top:-400px ;margin-left:500px ;">
                <img src="/images/M6.jpg" alt="" style="width: 400px;height: 400px; margin-top:-400px ;margin-left:1000px ;">

                </div>
                </p>
            </div>

            
        </div>
</article>
<!-- jobran.jpg -->
    </body>
</html>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\lamapro\resources\views/Mohammd.blade.php ENDPATH**/ ?>