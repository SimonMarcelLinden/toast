<?php

/**
 * Option for Toast Message
 *
 * @param boolean   closeButton     - Button to close the toast window.
 * @param boolean   newestOnTop     - If true, the newest toast always appears on top
 * @param string    positionClass   - Position of the toast.
 *                                    Available positions   [ toast-top-left    | toast-top-center      | toast-top-right ]
 *                                                          [ toast-center-left | toast-center-center   | toast-center-right ]
 *                                                          [ toast-bottom-left | toast-bottom-center   | toast-bottom-right ]
 * @param integer   showDuration    - Duration to show the toast
 * @param integer   hideDuration    - Duration to hide the toast.
 *
 */

return [
    //
    'options' => [
        "closeButton"       => true,
        "newestOnTop"       => true,
        "positionClass"     => "toast-top-right",
        "showDuration"      => 300,
        "hideDuration"      => 1000,
    ],
];
