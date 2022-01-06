@push('styles')
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<style>
    .carousel-cell {
                width: 10%;
                height: 200px;
                margin-right: 10px;
                background: #8C8;
                border-radius: 5px;
            }
</style>
@endpush
@push('scripts')
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        Livewire.hook('message.processed', (message, component) => {
        console.log('message.processed');
        window.dispatchEvent(new CustomEvent('load-cells'));
        })
    });
</script>
@endpush
<div 
    x-data="{ 
        flkty: null, 
        loadem(from, to) { 
            this.flkty.remove(to.querySelectorAll('.carousel-cell')); 
            this.flkty.append(from.querySelectorAll('.carousel-cell')); 
        } 
    }" 
    x-init="
    flkty = new Flickity( '.main-carousel', {cellAlign: 'left', contain: true, draggable: false} ); 
    loadem($refs.lwitems, $refs.fitems); 
    "
    @load-cells.window="loadem($refs.lwitems, $refs.fitems)"
    >
    <div x-ref="fitems" class="main-carousel" wire:ignore>
    </div>
    <br />
    <br />
    <div><button wire:click="gimme_another">May I have another?</button></div>
    <div x-cloak x-show="false" x-ref="lwitems">
    @foreach ($items as $item)
        <div class="carousel-cell"><button @click.stop="console.log('clicked {{ $item }}')">{{ $item }}</button></div>
    @endforeach
    </div>
</div>
