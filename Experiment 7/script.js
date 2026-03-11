const calculator = {
    value: "",

    add(val) {
        this.value = this.value + val;
        document.getElementById("display").value = this.value;
    },

    clear() {
        this.value = "";
        document.getElementById("display").value = "";
    },

    calculate() {
        if (this.value !== "") {
            this.value = eval(this.value);
            document.getElementById("display").value = this.value;
        }
    }
};
