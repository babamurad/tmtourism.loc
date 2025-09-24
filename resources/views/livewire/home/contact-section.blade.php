<!-- Секция Контакты -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Свяжитесь с нами</h2>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form wire:submit.prevent="submitForm">
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="name" wire:model="name" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email адрес</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" wire:model="email" required>
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tourDate">Предполагаемая дата тура</label>
                        <input type="date" class="form-control @error('tourDate') is-invalid @enderror" 
                               id="tourDate" wire:model="tourDate">
                        @error('tourDate') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="message">Сообщение</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" 
                                  id="message" rows="5" wire:model="message" required></textarea>
                        @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-success btn-block">
                        <span wire:loading.remove>Отправить</span>
                        <span wire:loading>Отправка...</span>
                    </button>
                </form>

                <div class="mt-5 text-center">
                    <h4 class="mb-3">Наши контакты</h4>
                    @forelse($contactInfos as $contact)
                        <p>
                            @if($contact->icon)
                                <i class="{{ $contact->icon }} contact-icon"></i>
                            @endif
                            {{ $contact->label }}: 
                            @if($contact->type === 'social')
                                <a href="{{ $contact->value }}" target="_blank">{{ $contact->value }}</a>
                            @else
                                {{ $contact->value }}
                            @endif
                        </p>
                    @empty
                        <p>
                            <i class="fab fa-whatsapp contact-icon"></i> WhatsApp: +993-12-345-678
                        </p>
                        <p>
                            <i class="fab fa-telegram contact-icon"></i> Telegram: +993-12-345-678
                        </p>
                        <p>
                            <i class="fas fa-phone contact-icon"></i> Телефон: +993-12-345-678
                        </p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
