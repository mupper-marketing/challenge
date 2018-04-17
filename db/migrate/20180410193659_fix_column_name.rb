class FixColumnName < ActiveRecord::Migration
  def change
    rename_column :donations, :type, :donation_type
  end
end
