<div>
        <!-- Be present above all else. - Naval Ravikant -->
        @if (session()->has('message'))
                        
        <div class="alert alert-success">{{ session()->get('message') }}</div>
        {{-- {{session()->forget('message') }} --}}
        @elseif(session()->has('error'))
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
        @endif
</div>