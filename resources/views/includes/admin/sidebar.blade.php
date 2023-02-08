<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    
    <li class="nav-header">ADMIN PANEL</li>
    
      <li class="nav-item">
        <a class="nav-link" href="{{ route('AdminIndex') }}">Home</a>
      </li>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('base') }}">Base</a>
      
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('createAdmin') }}">Create</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('updateBase') }}">Update</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('index') }}">Back</a>
    </li>
    
    
   
  </ul>
</nav>