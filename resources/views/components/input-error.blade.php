@props(['messages'])

@if ($messages)
    <div id="liveAlertPlaceholder"></div>

    <ul id="validationErrors" class="d-none">
        @foreach ((array) $messages as $message)
            <li>Email/Password tidak ditemukan</li>
        @endforeach
    </ul>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const alertPlaceholder = document.getElementById('liveAlertPlaceholder');
            const errorMessages = document.querySelectorAll('#validationErrors li');

            if (errorMessages.length > 0) {
                let combinedMessages = '';
                errorMessages.forEach(function(message) {
                    combinedMessages += message.textContent + '<br>';
                });

                const showAlert = (message, type) => {
                    const wrapper = document.createElement('div');
                    wrapper.innerHTML = [
                        `<div class="alert alert-${type} alert-dismissible fade show" role="alert">`,
                        `   <div>${message}</div>`,
                        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                        '</div>'
                    ].join('');
                    alertPlaceholder.append(wrapper);

                    // Mengatur agar alert otomatis hilang setelah 2 detik (2000 ms)
                    setTimeout(() => {
                        const alertElement = wrapper.querySelector('.alert');
                        if (alertElement) {
                            alertElement.classList.remove('show');
                            alertElement.classList.add('fade');
                            setTimeout(() => {
                                alertElement.remove();
                            }, 500);
                        }
                    }, 2000);
                }
                showAlert(combinedMessages, 'danger');
            }
        });
    </script>
@endif
