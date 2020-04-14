{{-- <form action="{{ route($product->url(), [$product->id]) }}"
      method="POST" class="app-form"
    >
  @csrf
  @method('PUT') --}}

  <div>
    <label class="col-md-3 form-control-label">Título del producto:</label>
    <input type="text" name="title"
          class="form-control shadow-sm {{ $errors->has('title') ? 'has-error' : '' }}"
          placeholder="Nombre del producto"
          value="{{ old('title', $product->title) }}"
      >
      {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
  </div>

  <div>
    <label class="col-md-3 form-control-label">Precio:</label>
    <input type="number" name="price"
          class="form-control shadow-sm "
          placeholder="Precio del producto"
          value="{{ old('price', $product->price) }}"
      >
  </div>

  <div>
    <label class="col-md-3 form-control-label">Descripción:</label>
    <textarea name="description"
              class="form-control shadow-sm" 
              cols="30" placeholder="Descripción del producto" rows="4"
        > 
      {{ old('description', $product->description) }}
    </textarea>
  </div>

  <div class="">
    <button class="btn btn-primary">Enviar</button>
  </div>
  
{{-- </form> --}}