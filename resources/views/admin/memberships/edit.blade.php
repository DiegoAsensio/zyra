<x-layouts.admin>

    <x-slot:title>Editar el plan {{ $membership->name }}</x-slot:title>

    <h1 class="fw-bold text-primary section-title">Editar los datos de {{ $membership->name }}</h1>

    @if ($errors->any() )
        <div class="alert alert-danger mb-3 ">No se Realizo cambios en el plan, revise los datos.</div>
    @endif

    <form action="{{ route('memberships.update',['id'=>$membership->id]) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" @error('name') aria-invalid="true" aria-errormessage="error-name" @enderror value="{{ old('name', $membership->name) }}">
            @error('name')
                <div class="text-danger" id="error-name">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tier_id">Nivel</label>
            <select name="tier_id" id="tier_id" class="form-select @error('tier_id') is-invalid @enderror" @error('tier_id') aria-invalid="true" aria-errormessage="error-tier_id" @enderror >
                @foreach ($tiers as $tier)
                    <option value="{{ $tier->id }}" @selected($tier->id == old('tier_id',$membership->tier_id))> {{ $tier->name }} </option>
                @endforeach
            </select>
            @error('tier_id')
                <div class="text-danger" id="error-tier_id">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price">Precio</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" @error('price') aria-invalid="true" aria-errormessage="error-price" @enderror value="{{ old('price', $membership->price) }}">
            @error('price')
                <div class="text-danger" id="error-price">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="daypass">daypass</label>
            <input type="text" name="daypass" id="daypass" class="form-control @error('daypass') is-invalid @enderror" @error('daypass') aria-invalid="true" aria-errormessage="error-daypass" @enderror value="{{ old('daypass', $membership->daypass) }}">
            @error('daypass')
                <div class="text-danger" id="error-daypass">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="credits">Creditos</label>
            <input type="text" name="credits" id="credits" class="form-control @error('credits') is-invalid @enderror" @error('credits') aria-invalid="true" aria-errormessage="error-credits" @enderror value="{{ old('credits', $membership->credits) }}">
            @error('credits')
                <div class="text-danger" id="error-credits">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('memberships.index')}}" class="btn btn-danger">Cancelar</a>
    </form>



</x-layouts.admin>
