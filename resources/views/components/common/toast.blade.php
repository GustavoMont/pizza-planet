<script>
    document.addEventListener('livewire:initialized', () => {
        Livewire.on('showToast', text => {
            Toastify({
                text,
                duration: 3000,
                gravity: "top", // `top` or `bottom`
                position: "left", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "#ccfbf1",
                    borderTop: '4px solid #14b8a6',
                    color: "#134e4b"
                },
            }).showToast();
        })
    })
</script>

@if (session()->has('toast'))
    <script>
        Livewire.dispatch('showToast', "{{ session('toast') }}")
    </script>
@endif
