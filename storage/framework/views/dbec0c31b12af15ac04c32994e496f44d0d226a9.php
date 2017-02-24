<?php $__env->startSection('lemburp'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<center><h1>Daftar Lembur Pegawai</h1></center>

<center><a  href="<?php echo e(url('lemburp/create')); ?>" class="btn btn-info">Tambah</a></center><hr>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr class="bg-danger">
				<th>No</th>
				<th>Nama Pegawai</th>
				<th>Kode Kategori Lembur</th>
				<th>Jumlah Jam</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		<?php  $no=1;  ?>
		<tbody>
			<?php $__currentLoopData = $lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($data->pegawai->user->name); ?></td>
				<td><?php echo e($data->kategori->kode_l); ?></td>
				<td><?php echo e($data->Jumlah_jam); ?>&nbsp Jam</td>
				<td><center>
					<a href="<?php echo e(route('lemburp.edit',$data->id)); ?>" class='btn btn-primary'><span class="glyphicon glyphicon-pencil"> Edit </a></span></center>
				</td>
				<td>
					<?php echo Form::open(['method'=>'DELETE','route'=>['lemburp.destroy',$data->id]]); ?>

					<?php echo Form::submit('Hapus',['class'=>'btn btn-danger']); ?>

					<?php echo Form::close(); ?>

				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>