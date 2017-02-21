@if (session('flash_message'))
  <div class="alert alert-{{ session('flash_type') }}">{{ session('flash_message') }}</div>
@endif