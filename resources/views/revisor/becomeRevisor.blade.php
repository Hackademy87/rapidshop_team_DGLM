<x-layout>
    <div class="container">
        <div class="row">
            @if (session('access.denied'))
                <div class="alert alert-danger m-0">
                    {{ session('access.denied') }}
                </div>
            @endif
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="text-center">VUOI DIVENTARE REVISORE?</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-8 mx-auto">
                <form action="{{ route('become.revisor', Auth::user()) }}" method="get">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><h4 class="">Inviaci la tua cover letter</h4>
                            <p class="m-0">ti contatteremo il prima possibile</p></label>
                        <textarea name="coverLetter" class="form-control" id="" cols="20" rows="10"></textarea>
                        <div class="text-danger">
                            @error('coverLetter')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn-login">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
