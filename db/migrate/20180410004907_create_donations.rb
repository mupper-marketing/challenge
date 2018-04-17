class CreateDonations < ActiveRecord::Migration
  def change
    create_table :donations do |t|
      t.text :donor
      t.text :type
      t.integer :quantity

      t.timestamps null: false
    end
  end
end
