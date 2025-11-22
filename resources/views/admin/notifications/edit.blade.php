@extends('admin.layouts.app')

@section('title', 'Edit Notification')
@section('page-title', 'Edit Notification')
@section('page-description', 'Update notification information')

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.notifications.update', $notification) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row g-3">
                    <div class="col-12">
                        <label for="type" class="form-label fw-semibold">Notification Type <span class="text-danger">*</span></label>
                        <select name="type" 
                                id="type" 
                                required
                                class="form-select @error('type') is-invalid @enderror"
                                onchange="toggleNotificationFields()">
                            <option value="">-- Select Type --</option>
                            <option value="top_notification" {{ old('type', $notification->type) == 'top_notification' ? 'selected' : '' }}>Top Notification</option>
                            <option value="popup_notification" {{ old('type', $notification->type) == 'popup_notification' ? 'selected' : '' }}>Popup Notification</option>
                            <option value="notification_page" {{ old('type', $notification->type) == 'notification_page' ? 'selected' : '' }}>Notification Page</option>
                        </select>
                        <small class="form-text text-muted">
                            <strong>Top Notification:</strong> Title only (displayed at top of page) • 
                            <strong>Popup Notification:</strong> Image only (shown as popup) • 
                            <strong>Notification Page:</strong> Full notification with title, image & description
                        </small>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-12" id="titleField">
                        <label for="title" class="form-label fw-semibold">Title <span class="text-danger" id="titleRequired">*</span></label>
                        <input type="text" 
                               name="title" 
                               id="title" 
                               value="{{ old('title', $notification->title) }}" 
                               required
                               class="form-control @error('title') is-invalid @enderror"
                               placeholder="Enter notification title">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-12" id="imgField">
                        <label for="img" class="form-label fw-semibold">Image <span class="text-danger" id="imgRequired"></span></label>
                        @if($notification->img)
                            <div class="mb-3">
                                <p class="text-muted small mb-2">Current Image:</p>
                                <img src="{{ asset('storage/' . $notification->img) }}" 
                                     alt="{{ $notification->title }}" 
                                     class="rounded border" 
                                     style="max-width: 200px; max-height: 200px; object-fit: cover;">
                            </div>
                        @endif
                        <input type="file" 
                               name="img" 
                               id="img" 
                               accept="image/*"
                               class="form-control @error('img') is-invalid @enderror">
                        <small class="form-text text-muted">Accepted formats: JPG, PNG, GIF, SVG (Max: 2MB). Leave empty to keep current image.</small>
                        @error('img')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-12" id="descriptionField">
                        <label for="description" class="form-label fw-semibold">Description</label>
                        <textarea name="description" 
                                  id="description" 
                                  rows="6"
                                  class="form-control @error('description') is-invalid @enderror"
                                  placeholder="Enter notification description...">{{ old('description', $notification->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="mt-4 pt-3 border-top">
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.notifications.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-x-circle me-1"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle me-1"></i> Update Notification
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
<script>
function toggleNotificationFields() {
    const type = document.getElementById('type').value;
    const titleField = document.getElementById('titleField');
    const titleInput = document.getElementById('title');
    const titleRequired = document.getElementById('titleRequired');
    const imgField = document.getElementById('imgField');
    const imgInput = document.getElementById('img');
    const imgRequired = document.getElementById('imgRequired');
    const descriptionField = document.getElementById('descriptionField');
    
    // Reset all fields
    titleInput.removeAttribute('required');
    imgInput.removeAttribute('required');
    titleRequired.style.display = 'none';
    imgRequired.textContent = '';
    
    if (type === 'top_notification') {
        // Top Notification: Only Title
        titleField.style.display = 'block';
        titleInput.setAttribute('required', 'required');
        titleRequired.style.display = 'inline';
        imgField.style.display = 'none';
        descriptionField.style.display = 'none';
    } else if (type === 'popup_notification') {
        // Popup Notification: Only Image
        titleField.style.display = 'none';
        imgField.style.display = 'block';
        imgInput.setAttribute('required', 'required');
        imgRequired.textContent = '*';
        descriptionField.style.display = 'none';
    } else if (type === 'notification_page') {
        // Notification Page: Title, Image & Description
        titleField.style.display = 'block';
        titleInput.setAttribute('required', 'required');
        titleRequired.style.display = 'inline';
        imgField.style.display = 'block';
        descriptionField.style.display = 'block';
    } else {
        // No type selected - show all
        titleField.style.display = 'block';
        imgField.style.display = 'block';
        descriptionField.style.display = 'block';
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    toggleNotificationFields();
});
</script>
@endpush
