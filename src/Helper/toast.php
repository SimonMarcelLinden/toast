<?php

if (! function_exists('toast')) {
    /**
     * Return the instance of toast.
     *
     * @return imonMarcelLinden\Toast\Toast
     */
    function toast() {
        return app('toast');
    }
}
