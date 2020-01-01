@extends('template')

@section('body')
    
    @if (isset($std))
    <h4><b>Students details:</b></h4>   
     <a href="{{ url('create-student') }}" role="button" class="btn btn-primary student" style="float: right;">Add Student</a><br><br>        
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
            </tr>
        </thead>
			<tbody>
			<?php foreach ($std as $student) { ?>
					<tr>
						<td><?php echo $student->id;?></td>
						<td><?php echo $student->name;?></td>
						<td><?php echo $student->address;?></td>
                           <td><a href="{{ url('students/edit', $student->id) }}" role="button" class="btn btn-success">Edit</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
        {{ $std->links() }}

		@elseif(isset($teach))

<h4><b>Available Teachers:</b></h4>            
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Phone No.</th>
			<th>Address</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($teach as $teacher) { ?>
			<tr>
				<td><?php echo $teacher->id;?></td>
				<td><?php echo $teacher->name;?></td>
				<td><?php echo $teacher->phone;?></td>
				<td><?php echo $teacher->address;?></td>
			</tr>

		<?php } ?>

	</tbody>
</table>
@elseif(isset($parents))
    <h4><b>Available Parents:</b></h4>            
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parents as $parent) { ?>
                <tr>
                    <td><?php echo $parent->no;?></td>
                    <td><?php echo $parent->name;?></td>
                    <td><?php echo $parent->phone;?></td>
                    <td><?php echo $parent->address;?></td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
   @else
    <h1> Please select any the above menu..</h1>
    @endif
@endsection