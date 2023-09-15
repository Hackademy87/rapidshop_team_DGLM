<x-layout title="rapidshop homepage">

    @if (session('message'))
        <div class="alert alert-success m-0">
            {{ session('message') }}
        </div>
    @endif
    <header class="container my-5">
        <div class="row">
            <h1 class="text-center">Compra e Vendi articoli usati</h1>
            <h2 class="text-center subtitle-header">con un click</h2>

        </div>
    </header>
    <main class="container mt-5">
        <section>
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">ULTIMI PRODOTTI</h3>
                </div>
            </div>
            <div class="row">
                @forelse ($announcements as $announcement)
                    <div class="col-3 my-3">
                        <x-card :announcement='$announcement' />
                    </div>
                @empty
                    <h2>NON CI SONO ANCORA ANNUNCI</h2>
                @endforelse
            </div>
        </section>

    </main>

</x-layout>
