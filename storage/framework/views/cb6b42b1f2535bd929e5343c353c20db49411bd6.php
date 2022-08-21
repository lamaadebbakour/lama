
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
           <center><h1 style="font-size:80px;"><strong> Fill your time and feed your mind</strong></h1></center>
           <br><br><br><br><br>
           <br><br><br><br><br>
       <center><article >
       <a href="/Adham"><h1 style="font-size:60px;border:3px; background-color:black; color:white;">Adham Alsharhawe</h1></a>
 
       <br><br> <br><br>
       <p style="font-size:40px;">Adham Abdel Halim Abdel Rahman Al-Sharqawi and his fame “Adham Al-Sharqawi” was born in 1898 in Itai Al-Baroud in the lake, one of the Egyptian folk heroes who wrote the long picture with the armed forces and feudal lords, writing for him a long life. At 23, the story of his struggles and heroism inspired later works of art and literature, and became an epic, public address for many years.

</p>
<br><br><br><br><br>

<a href="/Gibran"><h1 style="font-size:60px;border:3px; background-color:black; color:white;">Gibran Khalil Gibran</h1></a>
 
 <br><br> <br><br>
 <p style="font-size:40px;">Gibran Khalil Gibran (January 6, 1883 - April 10, 1931 AD) was a poet, writer, philosopher, spiritualist, painter, plastic artist, sculptor, Ottoman writers and poets from the Diaspora. Poor, his mother Camila was thirty when she gave birth to him and his father, Khalil, was her third husband.

</p>
<br><br><br><br>
<a href="/Mohammd"><h1 style="font-size:60px;border:3px; background-color:black; color:white;">Mohammd Tarek</h1></a>
 
 <br><br> <br><br>
 <p style="font-size:40px;">Mohamed Tariq, a member of the General Syndicate of Press and Media. A novelist, a blogger, a researcher in the field of psychology, and a lecturer in the art of writing novels and short stories. He won the “Best Young Writer 2015” award for his book Nicotine Dose

</p>




   </article>
   </center>
       </body>
   </html>
    <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\lamapro\resources\views/index.blade.php ENDPATH**/ ?>