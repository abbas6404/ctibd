@extends('admin.layouts.app')

@section('title', 'Notifications')
@section('page-title', 'Notifications Management')
@section('page-description', 'Manage all notifications')

@section('header-actions')
    <a href="{{ route('admin.notifications.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle me-1"></i> Add Notification
    </a>
@endsection

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="border-0">Type</th>
                            <th class="border-0">Image</th>
                            <th class="border-0">Title</th>
                            <th class="border-0">Description</th>
                            <th class="border-0">Created</th>
                            <th class="border-0 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($notifications as $notification)
                            <tr>
                                <td>
                                    @php
                                        $typeColors = [
                                            'top_notification' => ['bg' => 'bg-primary', 'text' => 'text-white'],
                                            'popup_notification' => ['bg' => 'bg-info', 'text' => 'text-white'],
                                            'notification_page' => ['bg' => 'bg-success', 'text' => 'text-white'],
                                        ];
                                        $color = $typeColors[$notification->type] ?? ['bg' => 'bg-secondary', 'text' => 'text-white'];
                                    @endphp
                                    <span class="badge {{ $color['bg'] }} {{ $color['text'] }}" style="font-size: 0.75rem;">
                                        {{ $notification->type_name }}
                                    </span>
                                </td>
                                <td>
                                    @if($notification->img)
                                        <img src="{{ asset('storage/' . $notification->img) }}" 
                                             alt="{{ $notification->title }}" 
                                             class="rounded" 
                                             style="width: 80px; height: 80px; object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center" 
                                             style="width: 80px; height: 80px;">
                                            <i class="bi bi-bell text-muted fs-4"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="fw-semibold">{{ $notification->title ?? 'N/A' }}</div>
                                </td>
                                <td>
                                    <div class="text-muted small">
                                        {{ Str::limit($notification->description ?? 'No description', 100) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted small">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        {{ $notification->created_at->format('M d, Y') }}
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.notifications.edit', $notification) }}" 
                                           class="btn btn-sm btn-outline-primary" 
                                           title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.notifications.destroy', $notification) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this notification?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn btn-sm btn-outline-danger" 
                                                    title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="bi bi-bell fs-1 d-block mb-3"></i>
                                        <p class="mb-0">No notifications found.</p>
                                        <a href="{{ route('admin.notifications.create') }}" class="btn btn-sm btn-primary mt-3">
                                            <i class="bi bi-plus-circle me-1"></i> Add First Notification
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($notifications->hasPages())
                <div class="card-footer border-top bg-white py-3">
                    {{ $notifications->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
@endsection
