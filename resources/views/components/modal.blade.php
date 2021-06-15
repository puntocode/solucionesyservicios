 <!--Modal-->
 <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-40">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg  overflow-y-auto z-50">

      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold text-steel-700">Solicitar Cotización</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <div class="modal-body">
            <form id="cotizacion-form" action="{{ route('cotizacion-mail') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombre" class="block text-gray-700 text-sm mb-2">Nombre:</label>
                    <input type="text" class="p-3 bg-white rounded form-input w-full border input-focus" name="nombre" autofocus>
                </div>
                <div class="form-group">
                    <label for="nombre" class="block text-gray-700 text-sm mb-2">Celular:</label>
                    <input type="text" class="p-3 bg-white rounded form-input w-full border input-focus" name="celular" required>
                </div>
                <div class="form-group">
                    <label for="nombre" class="block text-gray-700 text-sm mb-2">Correo:</label>
                    <input type="email" class="p-3 bg-white rounded form-input w-full border input-focus" name="correo" required>
                </div>
                <div class="form-group">
                    <label for="nombre" class="block text-gray-700 text-sm mb-2">Servicio que desea Cotizar:</label>
                    <textarea name="consulta" class="resize-none p-3 rounded form-input border input-focus w-full"></textarea>
                </div>
            </form>
        </div>

        <!--Footer-->
        <div class="flex justify-between pt-10">
            <span class="modal-close text-gray-600 cursor-pointer">Cancelar</span>
            <button class="btn btn-steel-700 text-center p-1 px-5">Solicitar</button>
        </div>

      </div>
    </div>
  </div>
