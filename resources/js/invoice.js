import Helper from './helper';

class Invoice {
    constructor() {
        this.subtotal = 0;
        this.discount = 0;
        this.tax = 0;
        this.subtotalEl = $('.subtotal');
        this.totalEl = $('.total');
        this.invoiceItemCounter = 0;
        this.invoiceItem = {};
    }

    addInvoiceItem () {
        this.invoiceItemCounter++;
        $(".invoice-table tbody").prepend(`
            <tr class="invoice_item" id="${this.invoiceItemCounter}">
                <td><input type="text" name="invoice_item_${this.invoiceItemCounter}[name]" placeholder="Enter an Item Name" required></td>
                <td><input type="text" name="invoice_item_${this.invoiceItemCounter}[price]" placeholder="€0.00" class="price"></td>
                <td><input type="text" name="invoice_item_${this.invoiceItemCounter}[quantity]" value="1" class="quantity"></td>
                <td><input type="text" name="invoice_item_${this.invoiceItemCounter}[amount]" placeholder="€0.00" class="amount" readonly></td>
                <td class="text-danger remove_invoice_item remove" title="Delete" ><i class="fas fa-times"></i></td>
            </tr>
        `);

        this.invoiceItem[this.invoiceItemCounter] = {
            price: 0,
            quantity: 1,
            amount: 0
        };
    }

    calculateDiscount () {
        return (this.subtotal * this.discount) / 100;
    }

    calculateTax () {
        return ((this.subtotal - this.calculateDiscount()) * this.tax) / 100;
    }

    calculateSubTotal (oldAmount, newAmount = 0) {
        this.subtotal = (this.subtotal - oldAmount + newAmount).toFixed(2);
        this.subtotalEl.text(this.subtotal);
    }

    calculateTotal () {
        let totalVal = (this.subtotal - this.calculateDiscount() - this.calculateTax()).toFixed(2);
        this.totalEl.text(totalVal);
    }
}

let invoice = new Invoice();

//Adds invoice item
$('.add_invoice_item').click(function() {
    invoice.addInvoiceItem();
});

//Deletes invoice item
$(document).on('click', '.remove_invoice_item', function () {
    let parentEl = $(this).parents('.invoice_item');
    let selectedEl = parentEl.attr('id');
    let invoiceItem = invoice.invoiceItem[selectedEl];
    invoice.calculateSubTotal(invoiceItem.amount);
    delete invoice.invoiceItem[selectedEl];
    parentEl.remove();
    invoice.calculateTotal();
});

//Price/Quantity Handler
$(document).on('input', '.price, .quantity', function (e) {
    Helper.allowFloatNumbers(e);
    let parentEl = $(this).parents('.invoice_item');
    let selectedEl = parentEl.attr('id');
    let invoiceItem = invoice.invoiceItem[selectedEl];

    if($(e.target).is("input.price")) {
        invoiceItem.price = +$(this).val();
    } else {
        invoiceItem.quantity = +$(this).val();
    }

    let oldAmount = invoiceItem.amount;
    invoiceItem.amount = invoiceItem.price * invoiceItem.quantity;
    let newAmount = invoiceItem.amount;
    parentEl.find('.amount').val(invoiceItem.amount);
    invoice.calculateSubTotal(oldAmount, newAmount);
    invoice.calculateTotal();
});

//Discount Handler
$('.discount').on('input', function (e) {
    Helper.allowFloatNumbers(e);
    invoice.discount = +$(this).val();
    invoice.calculateTotal();
});

//Tax Handler
$('.tax').on('input', function (e) {
    Helper.allowFloatNumbers(e);
    invoice.tax = +$(this).val();
    invoice.calculateTotal();
});
